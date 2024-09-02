<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        // $locale = App::getLocale();

        // $groups = Permission::where('guard_name', 'admin')->get();

        // foreach ($groups as $group) {
        //     $group->name = $group->getTranslation('name', $locale);
        // }
        if(App::getLocale() =='en')
        $groups = Permission::select('name_en as name' , 'id')->where('guard_name', 'admin')->get();
        else
        $groups = Permission::select('name_ar as name' , 'id')->where('guard_name', 'admin')->get();
        // dd($groups);
      $roles = Role::where('guard_name','admin')->paginate();
      return view('role.index',compact('roles','groups'));
    }

    public function store(RoleRequest $request)
    {
        // Role::create([
        //     'name' => $request->input('name'),
        //     'guard_name' => $request->input('guard_name'),
        // ]);
        $data = $request->validated();
        $role = Role::create(['name' => $data['name'], 'guard_name' => 'admin']);
        if (isset($data['permissionArray'])) {
            foreach ($data['permissionArray'] as $permission => $value) {
                $role->givePermissionTo($permission);
            }
        }

        session()->flash('add');
        return redirect()->route('role.index');
    }

    public function update(RoleRequest $request, Role $role)
    {
        $data = $request->validated();
        $role->update(['name' => $data['name']]);
        $role->syncPermissions();
        if (isset($data['permissionArray'])) {
            foreach ($data['permissionArray'] as $permission => $value) {
                $role->givePermissionTo($permission);
            }
        }
           session()->flash('edit');
        return redirect()->route('role.index');
    }


    // public function destroy($request)
    // {
    //     Section::findOrFail($request->id)->delete();
    //     session()->flash('delete');
    //     return redirect()->route('Sections.index');
    // }
    public function destroy(Role $role)
    {
        $role->syncPermissions();
        $role->delete();
        session()->flash('delete');
        // return response()->json(['success' => __('messages.deleted')]);
        return redirect()->route('role.index');
    }
}
