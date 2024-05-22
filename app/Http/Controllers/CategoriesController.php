<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();

        return view('categories.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::orderBy('id','desc')->get();
        return view('categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        // 'href_link' => 'required|url',
    ]

);

    try {
        Categories::create([
            'name' => $request->name,
            // 'href_link' => $request->href_link,
        ]);
        Session::flash('status', 'Category Saved Successfully');
        return redirect()->route('admin.categories.index');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->with('error', 'Failed to save category. Please try again.');
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Categories::where('id', $id)->first();

        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            // 'href_link' => 'required|url',
        ],
       

    );

        try {
            $category = Categories::findOrFail($id);
            $category->update([
                'name' => $request->name,
                // 'href_link' => $request->href_link,
            ]);
            return redirect()->route('admin.categories.index')->with('status', 'Category Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Failed to update category. Please try again.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Categories::findOrFail($id);

        $categories->delete();

        return redirect()->route('admin.categories.index')->with('status', 'Category deleted Successfully');
    }
}
