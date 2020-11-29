<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateFormaddUser;
use App\Http\Requests\ValidateFormUpdateUser;
use App\ModelStaff;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controllers
{
    public function index()
    {
        $user = User::with('staff')->get();
        return view('admin.users.account.index',compact('user'));
    }


    public function create()
    {
        $role = Role::all();
        $permission = Permission::all();
        $staff = Staff::all();
        return view('admin.users.account.add',compact('role','permission','staff'));
    }
    public function show($id){
        $role_user = Role::all();
        $users = User::with('staff')->with('role')->where('id',$id)->get();
        foreach ($users as $user){}
        foreach ($user->role as $roles){}

        return view('admin.users.account.show_detail',compact('user','role_user','roles'));
            }

    public function store(ValidateFormaddUser $request)
    {
        DB::beginTransaction();
       $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
           'phone' => $request->phone,
           'staff_id' => $request->staff_user,
           'password' => Hash::make($request->password),
           'created_at' => \DateTime::ATOM
        ]);
       $roles = $request->role;
//       $permission = $request->permission;
        $user->assignRole([$roles]);
//        $user->givePermissionTo([$permission]);
        DB::commit();
        Alert()->success('Thành công','Bạn đã thêm tài khoản thành công');
        return redirect()->route('user.index');
    }
    public function edit($id)
    {
        return view('admin.users.account.edit');
    }
    public function update(ValidateFormUpdateUser $request, $id)
    {
        $password = $request->password;
        DB::beginTransaction();
     if ($password != null){
         User::find($id)->update([
         'name' => $request->name,
         'email' => $request->email,
         'phone' => $request->phone,
         'password' => Hash::make($request->password),
     ]);
     }else{
         User::find($id)->update([
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone,
             ]);
     }
        DB::commit();
        Alert()->success('Thành công','Bạn đã Sửa tài khoản thành công');
        return redirect()->route('user.index');
    }


    public function destroy($id)
    {
       $user = User::find($id);
       if ($user->hasAnyRole(['Super Admin'])){
           Alert()->error('Cảnh báo','Bạn không thể xóa Admin chính');
           return redirect()->route('user.index',$id);
       }else{
           $user->delete();
           Alert()->success('Thành công','Bạn đã xóa thàn công');
           return redirect()->route('user.index',$id);
       }
    }
    public function updateRole(Request $request,$id){
        $user = User::find($id);
        $roles = $request->role;
          $user->assignRole([$roles])->update();
        Alert()->success('Thành công','Cập nhật quyền thành công');
        return redirect()->route('user.show',$id);
    }
    public function updateimage(Request $request,$id){
        $user = User::find($id);
        $data = array();

        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move('user', $new_image);
        $data['avatar'] = $new_image;
        DB::table('users')->where('id', $user->id)->update($data);
        Alert()->success('Thành công', 'Cập nhật ảnh thành công');
        return redirect()->route('user.show', $id);

    }
    public function profile(){


        return view('admin.users.account.profile');
    }
}