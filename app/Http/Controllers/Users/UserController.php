<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormaddUser;
use App\Staff;
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
        $user = User::with('staff')->with('role')->where('id',$id)->get();
        return response()->json(['data'=>$user,'name'=>'Bình'],200); // 200 là mã lỗi
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
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
