<?php

namespace App\Http\Controllers\Nhanvien;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateAddStaff;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\WorkSift;

class ListnhanvienController extends Controller
{
 
    public function index()
    {
        $listStaffs = Staff::all();
        $work_sift = WorkSift::all();
        return view('admin.nhanvien.list-nhanvien.index',['listStaffs'=>$listStaffs,'listWorkSift'=>$work_sift]);
    }
    public function create()
    {
        $work_sift = WorkSift::all();
        return view('admin.nhanvien.list-nhanvien.add',['listWorkSift'=>$work_sift]);
    }
    public function store(ValidateAddStaff $request)
    {
        $file_name = $request->file('avatar')->getClientOriginalName();
        $staffs = new Staff;
        $staffs->name = $request->name;
        $staffs->avatar = $file_name;
        $staffs->work_sift_id = implode(',', $request->work_sift_id);
        $staffs->phone = $request->phone;
        $staffs->email = $request->email;
        $staffs->address = $request->address;
        $staffs->status = $request->status;
        $staffs->contract = $request->contract;
        $staffs->wage = $request->wage;
        $staffs->title = $request->title;
        $request->file('avatar')->move('public/admin/images/',$file_name);
        $staffs->save();
        return redirect()->action('Nhanvien\ListnhanvienController@index');
    }

    public function show($id)
    {
        $listStaff = Staff::find($id);
        return view('admin.nhanvien.list-nhanvien.index',['listStaff'=>$listStaff]);
    }

    public function edit($id)
    {
        $listStaff = Staff::find($id);
        return view('admin.nhanvien.list-nhanvien.index',['listStaff'=>$listStaff]);
    }
    public function update(Request $request, $id)
    {
        // $file_name = $request->file('avatar')->getClientOriginalName();
        $staffs = new Staff;
        $arr['name'] = $request->name;
        $arr['avatar'] = $request->avatar;
        $arr['phone'] = $request->phone;
        $arr['email'] = $request->email;
        $arr['address'] = $request->address;
        $arr['contract'] = $request->contract;
        $arr['wage'] = $request->wage;
        $arr['title'] = $request->title;
        $arr['status'] = $request->status;
        $staffs::where('id', $id)->update($arr);
        return redirect()->action('Nhanvien\ListnhanvienController@index');
    }
    public function destroy($id)
    {
        Staff::destroy($id);
        return back();
    }
}
