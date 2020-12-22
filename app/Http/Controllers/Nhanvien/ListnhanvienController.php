<?php

namespace App\Http\Controllers\Nhanvien;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateAddStaff;
use App\Http\Requests\ValidateEditStaff;
use App\Models\Staff;
use App\Models\Position;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ListnhanvienController extends Controller
{

    public function index(Request $request)
    {
        $listStaffs = Staff::paginate(5);
        if ($request->ajax()) {
            return view('admin.nhanvien.list-nhanvien.index', compact('listStaffs'));
        }
        return view('admin.nhanvien.list-nhanvien.pagination', compact('listStaffs'));
    }

    public function create()
    {
        $listPosition = Position::all();
        return view('admin.nhanvien.list-nhanvien.add', ['listPosition' => $listPosition]);
    }
    public function store(ValidateAddStaff $request)
    {
        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move('staff', $new_image);
        $staffs = new Staff;
        $staffs->code = $request->code;
        $staffs->name = $request->name;
        $staffs->gender = $request->gender;
        $staffs->phone = $request->phone;
        $staffs->email = $request->email;
        $staffs->address = $request->address;
        $staffs->status = $request->status;
        $staffs->contract = $request->contract;
        $staffs->wage = $request->wage;
        $staffs->id_position = $request->position;
        $staffs['avatar'] = $new_image;
        $staffs->save();
        Alert()->success('Thành công', 'Bạn đã thêm thàn công');
        return redirect()->route('listnhanvien');
    }

    public function show($id)
    {
        $listStaffs = Staff::find($id);
        return view('admin.nhanvien.list-nhanvien.detail', ['listStaffs' => $listStaffs]);
    }

    public function edit($id)
    {
        $listPosition = Position::all();
        $listStaffs = Staff::find($id);
        return view('admin.nhanvien.list-nhanvien.edit', ['listStaffs' => $listStaffs, 'listPosition' => $listPosition]);
    }
    public function update(ValidateEditStaff $request, $id)
    {
        $get_image = $request->file('avatar');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('staff', $new_image);
            $staffs = new Staff;
            $arr['code'] = $request->code;
            $arr['name'] = $request->name;
            $arr['gender'] = $request->gender;
            $arr['phone'] = $request->phone;
            $arr['email'] = $request->email;
            $arr['address'] = $request->address;
            $arr['contract'] = $request->contract;
            $arr['wage'] = $request->wage;
            $arr['id_position'] = $request->position;
            $arr['status'] = $request->status;
            $arr['avatar'] = $new_image;
            $staffs->where('id', $id)->update($arr);
        } else {
            $staffs = new Staff;
            $arr['code'] = $request->code;
            $arr['name'] = $request->name;
            $arr['gender'] = $request->gender;
            $arr['phone'] = $request->phone;
            $arr['email'] = $request->email;
            $arr['address'] = $request->address;
            $arr['contract'] = $request->contract;
            $arr['wage'] = $request->wage;
            $arr['id_position'] = $request->position;
            $arr['status'] = $request->status;
            $staffs->where('id', $id)->update($arr);
        }
        Alert()->success('Thành công', 'Cập nhật nhân viên thành công');
        return redirect()->route('listnhanvien');
    }
    public function destroy($id)
    {
        $user_id = Auth::user()->id;
        if($user_id == $id){
            Alert()->error('Không thể xóa', 'Hiện tại tài khoản đang được đăng nhập');
            return back();
        }else{
            User::where('staff_id', $id)->delete();
            Staff::where('id', $id)->delete();
            Alert()->success('Thành công', 'Xóa nhân viên thành công');
            return back();
        }

    }
}