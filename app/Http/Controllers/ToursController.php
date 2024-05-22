<?php

namespace App\Http\Controllers;

use view;
use App\Models\Tours;
use App\Models\Categories;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Auth;

class ToursController extends Controller
{
    public function index(){
        
        $categories = Categories::all();
        $tours = Tours::orderBy('id','desc')->get();
        
        return view('tours.index',compact('tours','categories'));
    }

    public function create(){
        $categories = Categories::all();
        $tours = Tours::all();

        return view('tours.create', compact('tours','categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the form data
        $request->validate([
            'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
         // dd('here');
        // Handle image upload
        $imageName = time().'.'.$request->file('image_url')->getClientOriginalExtension();
        $request->file('image_url')->move(public_path('images'), $imageName);

        // Save the data to the database using create() method
        Tours::create([
            'title' => $request->title,
            'info' => $request->info,
            'category' => $request->category,
            'type' => $request->category,
            'is_featured' => $request->is_featured==1?1:0,
            'description' => $request->description,
            'image_url' => './images/' . $imageName,
            'start_date' =>$request->start_date ,
            'end_date'   =>$request->end_date ,
            'no_of_days' =>$request->no_of_days ,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.tours.index')->with('status', 'Tour Saved successfully.');
    }

    public function edit($id)
    {
        $tours = Tours::where('id', $id)->first();
        $categories = Categories::all();
        return view('tours.edit', compact('tours','categories'));
    }

    public function update(Request $request, $id)
    {

        // dd($request->all());

        // Retrieve the Tours item from the database
        $tours = Tours::findOrFail($id);
           if ($request->hasFile('image_url')) {
        // Validate the form data
        $request->validate([
            'image_url' => 'nullable|image|max:2048',
        ]);

        }

        // Handle image upload if a new image is provided
        if ($request->hasFile('image_url')) {
            $img_file_path = public_path($tours->image_url);
            if(file_exists($img_file_path)){
                unlink($img_file_path);
            }
            $imageName = time().'.'.$request->file('image_url')->getClientOriginalExtension();
            $request->file('image_url')->move(public_path('images'), $imageName);
            $tours->image_url = './images/' . $imageName;
            
        }


        // Update the other fields
        $tours->title       = $request->title;
        $tours->info        = $request->info;
        $tours->category    = $request->category;
        $tours->type        = $request->category;
        $tours->is_featured = $request->is_featured==1?1:0;
        $tours->description = $request->description;
        $tours->start_date  = $request->start_date;
        $tours->end_date    = $request->end_date;
        $tours->no_of_days  = $request->no_of_days;

        // Save the changes to the database
        $tours->save();

        // Redirect back with success message
        return redirect()->route('admin.tours.index')->with('status', 'Tour updated successfully.');
    }

    public function destroy($id)
    {
        $tours = Tours::findOrFail($id);
        $tours->delete();

        return redirect()->route('admin.tours.index')->with('status', 'Image Deleted Successfully');
    }
    
}
