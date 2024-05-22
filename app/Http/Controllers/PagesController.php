<?php

namespace App\Http\Controllers;

use App\Models\subscription;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\Settings;
use App\Models\Tours;
use App\Models\QuickLink;
use App\Models\Categories;
use App\Models\Gallery;
use App\Models\Flyers;

use File;
use DB;
use Carbon\Carbon;

use Mail;
use App\Mail\ContactUsMail;

class PagesController extends Controller
{


    private $uploadPath = "uploads/";


    public function index(){
        // About us
        $aboutusData= Settings::where('type','about_us')->get();
        if($aboutusData){
            foreach ($aboutusData as $key => $aud) {
                $pagedetails['about_us'][$aud['settings_name']] = $aud['settings_value'];
            }
        }
        $aboutUs=isset($pagedetails['about_us'])?$pagedetails['about_us']:[];
         // Trip
        $tripData= Settings::where('type','trip')->get();
        if($tripData){
            foreach ($tripData as $key => $tpd) {
                $pagedetails['trip'][$tpd['settings_name']] = $tpd['settings_value'];
            }   
        }
        $trip=isset($pagedetails['trip'])?$pagedetails['trip']:[];
        // Quick Links
        $quick_linksDataData= Settings::where('type','quick_links')->get();
        if($quick_linksDataData){
            foreach ($quick_linksDataData as $key => $qld) {
                $pagedetails['quick_links'][$qld['settings_name']] = $qld['settings_value'];
            }
        }
        $quick_links=isset($pagedetails['quick_links'])?$pagedetails['quick_links']:[];
        // Umcoming 3 months Tours
        $upcomingDays = Carbon::now()->addMonth(3)->format('Y-m-d'); 
        $tours        = Tours::where('start_date', '>=',Carbon::now())->get()->groupBy(function($val) {
            return Carbon::parse($val->start_date)->format('M');
        });
        // dd($tours);
        $pageData['home']        = Tours::where('is_featured',0)->get();
        $pageData['featured']    = Tours::where('is_featured',1)->orderBy('updated_at','desc')->first();
        $gallery_data            = Gallery::select('images_url')->get()->toArray();
        $gallery_image = [];
        if( count($gallery_data) > 0 ) {
            foreach($gallery_data as $gdata){
                $g_images = explode(',',$gdata['images_url']);
                if(count($g_images) > 0 ) {
                    foreach($g_images as $gImage ){
                        $gallery_image[] = $gImage;
                    }
                }
            }
        }
        $pageData['gallery']     = $gallery_image;
        $pageData['tours']       = $tours;
        $pageData['about_us']    = $aboutUs;
        $pageData['trip']        = $trip;
        $pageData['footer_ql']   = $quick_links;
        // $pageData['ql_data']     = QuickLink::all();
        // $pageData['categories']  = Categories::all();
        $pageData['flyers']      = Flyers::all();
        // dd($pageData['featured']);
        return view('mainPage',compact('pageData'));
    }

    public function home(){
        $pagedetails = [];
        

        //About us
        $aboutusData= Settings::where('type','about_us')->get();
        if($aboutusData){
            foreach ($aboutusData as $key => $aud) {
                $pagedetails['about_us'][$aud['settings_name']] = $aud['settings_value'];
            }

            $aboutUs=isset($pagedetails['about_us'])?$pagedetails['about_us']:[];
        }

        //trip
        $tripData= Settings::where('type','trip')->get();
        if($tripData){
            foreach ($tripData as $key => $tpd) {
                $pagedetails['trip'][$tpd['settings_name']] = $tpd['settings_value'];
            }

            $trip=isset($pagedetails['trip'])?$pagedetails['trip']:[];
        }

        //Quick Links

        $quick_linksDataData= Settings::where('type','quick_links')->get();
        if($quick_linksDataData){
            foreach ($quick_linksDataData as $key => $qld) {
                $pagedetails['quick_links'][$qld['settings_name']] = $qld['settings_value'];
            }

            $quick_links=isset($pagedetails['quick_links'])?$pagedetails['quick_links']:[];
        }

        // dd($quick_links);
        return view('homePage',compact('aboutUs','trip','quick_links'));
    }



    public function add_update_fields(Request $request){

    // dd($request->all());

       if($request->hasFile('featured_img')!=""){
        $request->validate([
            'featured_img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
    }

    if($request->hasFile('about_us_img')!=""){
       $request->validate([
        'about_us_img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
    ]);
   }

   if($request->hasFile('trip_img')!=""){
       $request->validate([
        'trip_img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
    ]);
   }

   $type                 = $request->formtype;
   $settings_name        = $request->settings_name;
   $settings_value       = $request->settings_value;
        // dd($settings_value);

   foreach ($settings_value as $key => $Sv) {
    if($Sv){
        $where =['type'=>$type,'settings_name'=>$settings_name[$key]];
        $dataExisted        = Settings::where($where)->first();
        if($dataExisted){
            $dataExisted->settings_value = $Sv;
            $dataExisted->save();
        }else{

            $dataExisted                 = New Settings();
            $dataExisted->type       = $type;
            $dataExisted->settings_name  = $settings_name[$key];
            $dataExisted->settings_value = $Sv;
            $dataExisted->save();
        }
    }
}

if($request->hasFile('featured_img')!=""){


    $formFileName = "featured_img";
    $fileFinalName = time() . rand(1111,
        9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
    $path = $this->getUploadPath();
    $img_path =$path.$fileFinalName;
    $fileName =$formFileName;
    $where =['type'=>$type,'settings_name'=>$fileName];
    $dataExisted        = Settings::where($where)->first();
    if($dataExisted){
        $filePath = public_path($dataExisted->settings_value);
        if(file_exists($filePath)){
                        unlink($filePath);//remove already existed file
                    }
                    $dataExisted->settings_value = $img_path;
                    $dataExisted->save();

                }else{
                    $dataExisted                 = New Settings();
                    $dataExisted->type       = $type;
                    $dataExisted->settings_name  = $fileName;
                    $dataExisted->settings_value = $img_path;
                    $dataExisted->save();
                }
                //upload file
                $request->$formFileName->move(public_path('uploads'), $fileFinalName);
                
            }

                //About us
            if($request->hasFile('about_us_img')!=""){


                $formFileName = "about_us_img";
                $fileFinalName = time() . rand(1111,
                    9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $img_path =$path.$fileFinalName;
                $fileName =$formFileName;
                $where =['type'=>$type,'settings_name'=>$fileName];
                $dataExisted        = Settings::where($where)->first();
                if($dataExisted){
                    $filePath = public_path($dataExisted->settings_value);
                    if(file_exists($filePath)){
                        unlink($filePath);//remove already existed file
                    }
                    
                    $dataExisted->settings_value = $img_path;
                    $dataExisted->save();

                }else{
                    $dataExisted                 = New Settings();
                    $dataExisted->type       = $type;
                    $dataExisted->settings_name  = $fileName;
                    $dataExisted->settings_value = $img_path;
                    $dataExisted->save();
                }
                //upload file
                $request->$formFileName->move(public_path('uploads'), $fileFinalName);
                
            }

            // trip image

            if($request->hasFile('trip_img')!=""){


                $formFileName = "trip_img";
                $fileFinalName = time() . rand(1111,
                    9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $img_path =$path.$fileFinalName;
                $fileName =$formFileName;
                $where =['type'=>$type,'settings_name'=>$fileName];
                $dataExisted        = Settings::where($where)->first();
                if($dataExisted){
                    $filePath = public_path($dataExisted->settings_value);
                    if(file_exists($filePath)){
                        unlink($filePath);//remove already existed file
                    }
                    $dataExisted->settings_value = $img_path;
                    $dataExisted->save();

                }else{
                    $dataExisted                 = New Settings();
                    $dataExisted->type       = $type;
                    $dataExisted->settings_name  = $fileName;
                    $dataExisted->settings_value = $img_path;
                    $dataExisted->save();
                }
                //upload file
                $request->$formFileName->move(public_path('uploads'), $fileFinalName);
                
            }
            //quick_links_logo

            if($request->hasFile('quick_links_logo')!=""){


                $formFileName = "quick_links_logo";
                $fileFinalName = time() . rand(1111,
                    9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $img_path =$path.$fileFinalName;
                $fileName =$formFileName;
                $where =['type'=>$type,'settings_name'=>$fileName];
                $dataExisted        = Settings::where($where)->first();
                if($dataExisted){
                    $filePath = public_path($dataExisted->settings_value);
                    if(file_exists($filePath)){
                        unlink($filePath);//remove already existed file
                    }
                    $dataExisted->settings_value = $img_path;
                    $dataExisted->save();

                }else{
                    $dataExisted                 = New Settings();
                    $dataExisted->type       = $type;
                    $dataExisted->settings_name  = $fileName;
                    $dataExisted->settings_value = $img_path;
                    $dataExisted->save();
                }
                //upload file
                $request->$formFileName->move(public_path('uploads'), $fileFinalName);
                
            }


            Session::flash('success', 'Information Updated successfully.');
            return redirect()->back(); 
        }


        public function getUploadPath()
        {
            return $this->uploadPath;
        }



        public function aboutus(){
            return view('aboutus');
        }

        public function contactUs(){
            return view('contact');
        }


        public function tours(Request $request,$type){

            $tours = [];
            if($type!="all"){
                $tourData = Tours::where('type',$type)->get();
            }else{
                $tourData = Tours::all();
            }
            foreach ($tourData as $tour) {
                $month = date('F', strtotime($tour->start_date));
                $tours[$month][] = $tour;
            }
            $pageData['tours'] = $tours;

            return view('tours', compact('pageData'));
        }

        public function reviews(){



            return view('reviews', );
        }

        public function send_contact_us_email(Request $request){
           
         $to      = "rmsalik016@gmail.com";
         $subject = $request->subject;


         $message = $request->message;
   // $message .= "We will be in touch soon";

        // $header = "From:info@heartofnorthtours.com \r\n";
   // $header .= "Cc:afgh@somedomain.com \r\n";
         $header = "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $send = mail($to,$subject,$message,$header);

            if ($send) {
                Session::flash('success', 'Thank you for contacting us. We will be in touch!');
            } else {
                Session::flash('error', 'Something went wrong! Could not contact us');

        }

        return redirect('contact-us');



    }

    public function newsletter(Request $request){
        return view('newsletter');

    }

   public function subscribe(Request $request){


    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'city' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'postal_code' => 'required|string|max:255',
        'phone_number' => 'required|string|max:11',
        'facebook' => 'nullable|string|max:255',
        'mobile_number' => 'nullable|string|max:255',
    ]);


    $subscription = Subscription::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'city' => $request->city,
        'state' => $request->state,
        'postal_code' => $request->postal_code,
        'phone_number' => $request->phone_number,
        'facebook' => $request->facebook,
        'mobile_number' => $request->mobile_number,
    ]);


    if ($subscription) {

        return redirect('newsletter')->with('success', 'Thank you for subscribing. We will get in touch with you shortly.');
    } else {

        return redirect('newsletter')->with('error', 'Failed to subscribe. Please try again later.');
    }
}


} //End Class
