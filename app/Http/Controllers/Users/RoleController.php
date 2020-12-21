<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\ValidateRole;
use App\Http\Requests\UpdateRole;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::with('permission')->get();
        return view('admin.users.role.index',compact('roles'));
    }


    public function create()
    {
        $permission = Permission::all();
        return view('admin.users.role.add',compact('permission'));
    }


    public function store(ValidateRole $request)
    {
        DB::beginTransaction();
        $role = \Spatie\Permission\Models\Role::create([
         'name' => $request->name,
            'guard_name' => 'web'
        ]);
        $permission = $request->permission;
        $role->givePermissionTo([$permission]);
        DB::commit();
        Alert()->success('Thành công','Thêm phân quyền thành công');
        return redirect()->route('role');
    }
    public function edit($id)
    {
        $roles = Role::where('id',$id)->get();
        $permission = Permission::all();
        $role_permission = DB::table('role_has_permissions')->where('role_id',$id)->pluck('permission_id');
        return view('admin.users.role.edit',compact('roles','permission','role_permission'));
    }


    public function update(UpdateRole $request, $id)
    {
        DB::beginTransaction();
        Role::find($id)->update([
         'name' => $request->name,
        ]);
        $roles = \Spatie\Permission\Models\Role::find($id);
        $permission = $request->permission;
        $roles->syncPermissions([$permission]);
        DB::commit();
        Alert()->success('Thành công','Cập nhật phân quyền thành công');
        return redirect()->route('role');
    }
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $role = Role::find($id);
            //delete user of role_user_table
            //delete role_user
            $role->permissions()->detach();
            $role->delete();
            DB::commit();
            Alert()->success('Xóa thành công!')->autoClose(1500);
            return \redirect()->route('role');
        } catch (\Exception $e) {
            \abort(403);
            DB::rollBack();
            Log::error($e->getMessage() . $e->getLine());
        }

    }
}
