<?php

namespace App\Http\Controllers;

use App\Models\QuickLink;
use Illuminate\Http\Request;

class QuicklinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links = QuickLink::orderBy('id','desc')->get();

        return view('links.index',compact('links'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $links = QuickLink::all();

        return view('links.create', compact('links'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'href_link' => 'required'
        ]);

    QuickLink::create([

            'name' => $request->name,
            'href_link' => $request->href_link
        ]);

        return redirect()->route('admin.links.index')->with('status', 'Link Saved Successfully');
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
        $link = QuickLink::where('id', $id)->first();

        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'href_link' => 'required'
        ]);

        $links = QuickLink::findOrFail($id);

    $links->update([

            'name' => $request->name,
            'href_link' => $request->href_link
        ]);

        return redirect()->route('admin.links.index')->with('status', 'Link Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $links = QuickLink::findOrFail($id);

        $links->delete();

        return redirect()->route('admin.gallery.index')->with('status', 'Link deleted Successfully');
    }
}
