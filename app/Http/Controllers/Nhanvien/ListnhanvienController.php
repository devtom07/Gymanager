<?php

namespace App\Http\Controllers\Nhanvien;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateAddStaff;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\WorkSift;
use RealRashid\SweetAlert\Facades\Alert;

class ListnhanvienController extends Controller
{
 
    public function index()
    {
        $listStaffs = Staff::all();
        $listWorkSift = WorkSift::all();
        return view('admin.nhanvien.list-nhanvien.index',['listStaffs'=>$listStaffs,'listWorkSift'=>$listWorkSift]);

    }
    public function create()
    {
        $listWorkSift = WorkSift::all();
        return view('admin.nhanvien.list-nhanvien.add',['listWorkSift'=>$listWorkSift]);
    }
    public function store(ValidateAddStaff $request)
    {
        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
        $get_image->move('/public/admin/staff',$new_image);
        $staffs = new Staff;
        $staffs->name = $request->name;
        $staffs->work_sift_id = $request->work_sift_id;
        $staffs->phone = $request->phone;
        $staffs->email = $request->email;
        $staffs->address = $request->address;
        $staffs->status = $request->status;
        $staffs->contract = $request->contract;
        $staffs->wage = $request->wage;
        $staffs->title = 'admin';
        $staffs['avatar'] = $new_image;
        $staffs->save();
       Alert()->success('thành công','bạn đã thêm nhân viên thành công');
        return redirect()->route('listnhanvien');
    }

    public function show($id)
    {
        $listStaffs = Staff::find($id);
        return view('admin.nhanvien.list-nhanvien.index',['listStaffs'=>$listStaffs]);
    }

    public function edit($id)
    {
        $listWorkSift = WorkSift::all();
        $listStaffs = Staff::find($id);
        return view('admin.nhanvien.list-nhanvien.edit',['listStaffs'=>$listStaffs, 'listWorkSift'=>$listWorkSift]);
    }
    public function update(Request $request, $id)
    {
         $get_image = $request->file('avatar');
         if($get_image){
             $get_name_image = $get_image->getClientOriginalName();
             $name_image = current(explode('.',$get_name_image));
             $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
             $get_image->move('/public/admin/staff',$new_image);
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
             $staffs['avatar'] = $new_image;
             $staffs->where('id', $id)->update($arr);
         }else{
             $get_name_image = $get_image->getClientOriginalName();
             $name_image = current(explode('.',$get_name_image));
             $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
             $get_image->move('/public/admin/staff',$new_image);
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
             $staffs->where('id', $id)->update($arr);
         }

        return redirect()->action('Nhanvien\ListnhanvienController@index');
    }
    public function destroy($id)
    {
        Staff::find($id)->delete();
        Alert()->success('thành công','bạn đã xóa nhân viên thành công');
        return back();
    }
}
