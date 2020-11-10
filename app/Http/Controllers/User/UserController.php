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
use Yajra\DataTables\DataTables;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.account.index',compact('users'));
    }
    public function anyData()
    {

    }

    public function create()
    {
         $staff = Staff::all();
          $role = Role::all();
          $permission = Permission::all();
        return view('admin.users.account.add',compact('staff','role','permission'));
    }


    public function store(ValidateFormaddUser $request)
    {
        DB::beginTransaction();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        DB::commit();
        Alert()->success('Thành công','Bạn đã thêm tài khoản thành công');
        return redirect()->route('user.index');
    }


    public function show($id)
    {
        //
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
