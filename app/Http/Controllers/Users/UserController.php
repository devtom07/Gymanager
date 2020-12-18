<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateFormaddUser;
use App\Http\Requests\ValidateFormProfile;
use App\Http\Requests\ValidateFormProfilePassword;
use App\Http\Requests\ValidateFormUpdateUser;
use App\Models\Staff;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('staff')->orderBy('id', 'desc')->get();
        return view('admin.users.account.index', compact('user'));
    }


    public function create()
    {
        $role = Role::all();
        $permission = Permission::all();
        $staff = Staff::all();
        return view('admin.users.account.add', compact('role', 'permission', 'staff'));
    }

    public function show($id)
    {
        $role_user = Role::all();
        $role_id = [];
        $listRoleUser = DB::table('model_has_roles')->where('model_id', $id)->pluck('role_id');
        $users = User::with('staff')->with('role')->where('id', $id)->get();
        foreach ($users as $user) {
        }
        foreach ($user->role as $roles) {
            $role_id[] = $roles->id;
        }
        return view('admin.users.account.show_detail', compact('user', 'role_user', 'roles', 'role_id', 'listRoleUser'));
    }

    public function GetUser($id)
    {
        $role_user = Role::all();
        $role_id = [];
        $listRoleUser = DB::table('model_has_roles')->where('model_id', $id)->pluck('role_id');
        $users = User::with('staff')->with('role')->where('id', $id)->get();
        foreach ($users as $user) {
            $staff = $user->staff->name;
        }
        foreach ($user->role as $roles) {
            $role_id[] = $roles->id;
        }
        return json_encode(array('data' => $user));
    }

    public function store(ValidateFormaddUser $request)
    {
        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move('user', $new_image);
        DB::beginTransaction();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'staff_id' => $request->staff_user,
            'password' => Hash::make($request->password),
            'avatar' => $new_image
        ]);
        $roles = $request->role;
        $user->assignRole([$roles]);

        DB::commit();
        Alert()->success('Thành công', 'Bạn đã thêm tài khoản thành công');
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $staff = Staff::all();
        $role_user = Role::all();
        $role_id = [];
        $listRoleUser = DB::table('model_has_roles')->where('model_id', $id)->pluck('role_id');
        $users = User::with('staff')->with('role')->where('id', $id)->get();
        foreach ($users as $user) {
        }
        foreach ($user->role as $roles) {
            $role_id[] = $roles->id;
        }
        return view('admin.users.account.edit', compact('user', 'role_user', 'role_id', 'listRoleUser', 'staff'));

    }


    public function update(ValidateFormUpdateUser $request, $id)
    {
        $get_image = $request->file('avatar');
        $password = $request->password;
        if ($password != null) {
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('user', $new_image);
                DB::beginTransaction();
                User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'staff_id' => $request->staff_user,
                    'password' => Hash::make($request->password),
                    'avatar' => $new_image
                ]);
                $user = User::find($id);
                $user->syncRoles($request->role);
                DB::commit();
                Alert()->success('Thành công', 'Bạn đã cập nhật thàn công');
                return redirect()->route('user.index');

            } else {
                User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'staff_id' => $request->staff_user,
                    'password' => Hash::make($request->password),
                ]);
                $user = User::find($id);
                $user->syncRoles($request->role);
                DB::commit();
                Alert()->success('Thành công', 'Bạn đã cập nhật thàn công');
                return redirect()->route('user.index');
            }
        } else {
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('user', $new_image);
                DB::beginTransaction();
                User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'staff_id' => $request->staff_user,
                    'avatar' => $new_image
                ]);
                $user = User::find($id);
                $user->syncRoles($request->role);
                DB::commit();
                Alert()->success('Thành công', 'Bạn đã cập nhật thàn công');
                return redirect()->route('user.index');

            } else {
                User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'staff_id' => $request->staff_user,
                    'password' => Hash::make($request->password),
                ]);
                $user = User::find($id);
                $user->syncRoles($request->role);
                DB::commit();
                Alert()->success('Thành công', 'Bạn đã cập nhật thàn công');
                return redirect()->route('user.index');
            }
        }

    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        Alert()->success('Thành công', 'Bạn đã xóa thàn công');
        return redirect()->route('user.index', $id);
    }

    public function updateRole(Request $request, $id)
    {
        $user = User::find($id);
        $user->syncRoles($request->role);
        Alert()->success('Thành công', 'Cập nhật quyền thành công');
        return redirect()->route('user.show', $id);
    }

    public function updateimage(Request $request, $id)
    {
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

    public function profile($id)
    {
        $users = User::where('id', $id)->get();

        return view('admin.users.account.profile', compact('users'));
    }

    public function ImageProfile(Request $request, $id)
    {
        $user = User::find($id);
        $data = array();
        $get_image = $request->file('cover');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move('user', $new_image);
        $data['avatar'] = $new_image;
        DB::table('users')->where('id', $user->id)->update($data);
        Alert()->success('Thành công', 'Cập nhật ảnh thành công');
        return redirect()->route('user.profile', $id);
    }

    public function updateProfile(ValidateFormProfile $request, $id)
    {
        DB::beginTransaction();
        User::where('id', $id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        DB::commit();
        Alert()->success('Thành công', 'Bạn đã cập nhật thàn công');
        return redirect()->route('user.profile', $id);
    }

    public function updatePassword(ValidateFormProfilePassword $request, $id)
    {
        DB::beginTransaction();
        User::where('id', $id)->update([
            'password' => Hash::make($request->password)
        ]);
        DB::commit();
        Alert()->success('Thành công', 'Bạn đã cập nhật mật khẩu thành công');
        return redirect()->route('user.profile', $id);
    }
}
