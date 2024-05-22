<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index(){

        $users = User::all();

        return view('users.index', compact('users'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create',compact('roles'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        // Create a new user with the validated data
        $user = User::create($validatedData);

        $role = Role::find($request->role_id);

        if ($role) {
            $user->assignRole($role);
        } else {
            // Set the role to NULL if it's not found
            // $user->removeRole($user->roles);
        }

        return redirect()->route('admin.users.index')
                        ->with('status','User created successfully');
    }



    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }


    public function update(Request $request, User $user)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required',
        ]);

        // Update the user with the validated data
        $user->update($validatedData);


        $role = Role::find($request->role_id);

        if ($role) {
            $user->syncRoles([$role->name]);
        } else {

            $user->syncRoles([]);
        }

        return redirect()->route('admin.users.index')->with('status', 'User updated successfully');
    }


    // Delete users

    public function destroy($id)
    {

        $users = User::where('id', $id);

        $users->delete();

        return redirect('users.index')->with('status', 'User deleted successfully');
    }

}
