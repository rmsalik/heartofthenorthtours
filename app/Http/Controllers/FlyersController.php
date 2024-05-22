<?php

namespace App\Http\Controllers;

use view;
use App\Models\Flyers;
use App\Models\Categories;

use Illuminate\Http\Request;
use Validator;

use App\Rules\OctetStream;

class FlyersController extends Controller
{
    public function index(){
        $categories = Categories::all();
        $flyers = Flyers::orderBy('id','desc')->get();
        // dd('here');
        return view('flyers.index',compact('flyers','categories'));
    }

    public function create(){
        $categories = Categories::all();
        $flyers = Flyers::all();

        return view('flyers.create', compact('flyers','categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->file('pdf_url')->getClientMimeType());
        // Validate the form data
       if($request->hasFile('pdf_url')){
          $memeFileType = $request->file('pdf_url')->getClientMimeType();
          if($memeFileType == "application/octet-stream"){
            $validator = Validator::make($request->all(), [
                'image_url' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            // 'pdf_url' => ['required', new OctetStream],
            ]);

        } else {
           $validator = Validator::make($request->all(), [
            'image_url' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'pdf_url' => 'required|mimes:pdf|max:30720',
        ]);
       }

   } else{

       $validator = Validator::make($request->all(), [
            'image_url' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'pdf_url' => 'required|mimes:pdf|max:30720',
        ]);

   }




   if ($validator->fails()) {
            // dd($validator->fails());
    return back()
    ->withErrors($validator)
    ->withInput();
}
        // dd('here');
        // Handle image upload
$imageName = time().'.'.$request->file('image_url')->getClientOriginalExtension();
$request->file('image_url')->move(public_path('images'), $imageName);
$pdfName = $request->file('pdf_url')->getClientOriginalName();
$request->file('pdf_url')->move(public_path('pdf'), $pdfName);

   // Handle video upload
        if ($request->hasFile('video_link')) {
            $videoName = time().'.'.$request->file('video_link')->getClientOriginalExtension();
            $request->file('video_link')->move(public_path('video'), $videoName);
            $data['video_link'] = 'video/' . $videoName;
        }
        // Save the data to the database using create() method
Flyers::create([
    'title' => $request->title,
    'info' => $request->info,
    'book_now_link' => $request->book_now_link,
    'video_link' => $videoName ? $videoName : null,
    'description' => $request->description,
    'image_url' => './images/' . $imageName,
    'pdfFile' => './pdf/' . $pdfName,
]);

        // Redirect back with success message
return redirect()->route('admin.flyers.index')->with('status', 'Flyer Saved successfully.');
}

public function edit($id)
{
    $flyers = Flyers::where('id', $id)->first();
    $categories = Categories::all();
    return view('flyers.edit', compact('flyers','categories'));
}

public function update(Request $request, $id)
{

        // Retrieve the Flyers item from the database
    $flyers = Flyers::findOrFail($id);      

        // Validate form data based on file types
        if ($request->hasFile('image_url')) {
            $memeFileType = $request->file('image_url')->getClientMimeType();
            if ($memeFileType == "application/octet-stream") {
                $request->validate(['image_url' => 'nullable|image|max:5120']);
            }
        }
        
        if($request->hasFile('pdf_url')){

          $request->validate([    
            'image_url' => 'nullable|image|max:5120',
            'pdf_url' => 'nullable|mimes:pdf|max:30720'
        ]);

      }



        // Handle image upload if a new image is provided
      if ($request->hasFile('image_url')) {
        $img_file_path = public_path($flyers->image_url);
        if(file_exists($img_file_path)){
            unlink($img_file_path);
        }
        $imageName = time().'.'.$request->file('image_url')->getClientOriginalExtension();
        $request->file('image_url')->move(public_path('images'), $imageName);
            $flyers->image_url = 'images/' . $imageName;
    }

        // Handle PDF upload if a new PDF is provided
        if ($request->hasFile('pdf_url')) {
            $file_path = public_path($flyers->pdfFile);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
            $pdfName = $request->file('pdf_url')->getClientOriginalName();
            $request->file('pdf_url')->move(public_path('pdf'), $pdfName);
            $flyers->pdfFile = 'pdf/' . $pdfName;
        }

        // Handle video file upload
        if ($request->hasFile('video_link')) {
            $video_file_path = public_path($flyers->video_link);
            if (file_exists($video_file_path) && $flyers->video_link !="") {
                unlink($video_file_path);
            }
            $videoName = time().'.'.$request->file('video_link')->getClientOriginalExtension();
            $request->file('video_link')->move(public_path('video'), $videoName);
            $flyers->video_link = '' . $videoName;
        }

        // Update the other fields
    $flyers->title        = $request->title;
    $flyers->info         = $request->info;
    $flyers->book_now_link= $request->book_now_link;
    $flyers->description = $request->description;


        // Save the changes to the database
    $flyers->save();

        // Redirect back with success message
    return redirect()->route('admin.flyers.index')->with('status', 'Flyer updated successfully.');
}

public function destroy($id)
{
    $flyers = Flyers::findOrFail($id);
    $flyers->delete();

    return redirect()->route('admin.flyers.index')->with('status', 'Flyer Deleted Successfully');
}

public function detail(Request $request){

    return redirect('/');

        // dd($request->all());

}

}
