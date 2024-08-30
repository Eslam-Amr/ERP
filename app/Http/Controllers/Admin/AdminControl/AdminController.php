<?php

namespace App\Http\Controllers\Admin\AdminControl;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index(){
        $employees=Admin::paginate();
        $roles=Role::where('guard_name','admin')->get();
        return view('admin.index',compact('employees','roles'));
    }
    public function update(Request $request, Admin $admin)
    {
        $data = $request->all();
        dd(($data['rolesArray']));
        // $role->update(['name' => $data['name']]);
        // $admin->syncRoles();
        // if (isset($data['rolesArray'])) {
        //     foreach ($data['rolesArray'] as $role => $value) {
        //         // $role->givePermissionTo($permission);
        //         $admin->assignRole($role);
        //     }
        // }
            // Sync roles if rolesArray is provided
    if (isset($data['rolesArray'])) {
        // Sync the roles, replacing existing roles with the new ones from rolesArray
        foreach($data['rolesArray'] as $role)
        $admin->syncRoles($role);
    } else {
        // If no roles are provided, remove all roles
        $admin->syncRoles([]);
    }
           session()->flash('edit');
        return redirect()->route('admin.index');
    }
}
