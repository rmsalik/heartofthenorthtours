<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleStoreRequest;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::orderBy('id','ASC')->get();
        return view('role.index',compact('roles'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('role.create',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(RoleStoreRequest $request)
    {
        // dd($request->name);
        try {
            $role = Role::create(['name' => $request->input('name')]);
            // dd($role);
            $permissions = $request->input('permissions', []);

            // Ensure permissions are an array before syncing
            if (!is_array($permissions)) {
                throw new \InvalidArgumentException("Permissions must be provided as an array.");
            }

            $role->syncPermissions($permissions);

            return redirect()->route('admin.roles.index')->with('status', 'Role created successfully');
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            \Log::error("Error creating role: " . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->with('status', 'Failed to create role. Please try again.');
        }

    }


     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $role = Role::find($id);

        if (!$role) {
            // Handle case where role is not found, for example:
            return redirect()->route('admin.roles.index')->with('error', 'Role not found.');
        }

        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();

        return view('role.show', compact('role', 'rolePermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::get();
        $rolePermissions = $role->permissions->pluck('id')->all();


        return view('role.edit',compact('role','permissions','rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|unique:roles,name,'.$id,
        ]);
        $role = Role::findOrFail($id);
        if ($role == null) {
            return redirect()->back()->with('error', 'No Record Found To Edit.');
        }

        $request->validate( [
            'permissions' => 'required|array',
        ]);
        $data = [ 'permissions' => $request->input('permissions',[]),];
        $role->syncPermissions($data);

        return redirect()->route('admin.roles.index')
                        ->with('status','Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('admin.roles.index')
                        ->with('status','Role deleted successfully');
    }
}
