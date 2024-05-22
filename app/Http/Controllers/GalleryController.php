<?php

namespace App\Http\Controllers;

use view;
use App\Models\Gallery;
use App\Models\Tours;
use App\Models\Categories;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $categories = Categories::all();
        // $gallery = Gallery::all();
        $gallery =  Gallery::with('tours')->orderBy('id','desc')->get();
        return view('gallery.index',compact('gallery','categories'));
    }

    public function create(){
        $tours = Tours::all();
        $gallery = Gallery::all();

        return view('gallery.create', compact('gallery','tours'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the form data
        $request->validate([
            'images_url.*' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
         // dd('here');
        // Handle image upload
        // $imageName = time().'.'.$request->file('image_url')->getClientOriginalExtension();
        // $request->file('image_url')->move(public_path('images'), $imageName);

        $images_arry=[];
        if($file = $request->file('images_url')){
          foreach($file as $imageFile){
              $image_name = md5(rand(1000,10000));
              $ext = $imageFile->getClientOriginalExtension();
              $image_full_name = $image_name.'.'.$ext;
              $uploade_path = 'images/';
              $image_url = $uploade_path.$image_full_name;
              $imageFile->move($uploade_path,$image_full_name);
              $images_arry[] = './'.$image_url;
          }

      }
      $stored_images= implode(',', $images_arry);


        // Save the data to the database using create() method
      Gallery::create([
        'tour_id' => $request->tour,
        'images_url' => $stored_images,
    ]);

        // Redirect back with success message
      return redirect()->route('admin.gallery.index')->with('status', 'Images Saved successfully.');
  }

  public function edit($id)
  {
    $gallery =  Gallery::with('tours')->where('id', $id)->first();
    // $gallery = Gallery::where('id', $id)->first();
    $tours = Tours::all();
    return view('gallery.edit', compact('gallery','tours'));
}

public function update(Request $request, $id)
{

       

        // Retrieve the Tours item from the database
    $gallery = Gallery::findOrFail($id);


        // Validate the form data
    $request->validate([
        'images_url.*' => 'nullable|image|max:2048',
    ]);

        // Handle image upload if a new image is provided
    // if ($request->hasFile('image_url')) {
    //     $imageName = time().'.'.$request->file('image_url')->getClientOriginalExtension();
    //     $request->file('image_url')->move(public_path('images'), $imageName);
    //     $tours->image_url = './images/' . $imageName;

    // }

    $images_arry=[];
    if($file = $request->file('images_url')){
        //removed already stored files before update
        $stored_images_files = explode(',',$gallery->images_url);
        if(count($stored_images_files) > 0){
            foreach ($stored_images_files as $key => $storedImage) {
                $storeImagePath = public_path($storedImage);
                if(file_exists($storeImagePath)){
                    unlink($storeImagePath);
                }
            }
        }

      foreach($file as $imageFile){
          $image_name = md5(rand(1000,10000));
          $ext = $imageFile->getClientOriginalExtension();
          $image_full_name = $image_name.'.'.$ext;
          $uploade_path = 'images/';
          $image_url = $uploade_path.$image_full_name;
          $imageFile->move($uploade_path,$image_full_name);
          $images_arry[] = './'.$image_url;
      }
    $stored_images= implode(',', $images_arry);
      $gallery->images_url    = $stored_images;
  }



        // Update the other fields
  $gallery->tour_id       = $request->tour;
  

        // Save the changes to the database
  $gallery->save();

        // Redirect back with success message
  return redirect()->route('admin.gallery.index')->with('status', 'gallery updated successfully.');
}

public function destroy($id)
{
    $gallery = Gallery::findOrFail($id);
    $gallery->delete();

    return redirect()->route('admin.gallery.index')->with('status', 'Images Deleted Successfully');
}

}
