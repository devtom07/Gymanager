<?php

namespace App\Http\Controllers\Nhanvien;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateAddStaff;
use App\Http\Requests\ValidateEditStaff;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Title;
use RealRashid\SweetAlert\Facades\Alert;

class ListnhanvienController extends Controller
{
 
    public function index()
    {
        $listStaffs = Staff::all();
        return view('admin.nhanvien.list-nhanvien.index',['listStaffs'=>$listStaffs]);

    }
    public function create()
    {
        $listTitle = Title::all();
        return view('admin.nhanvien.list-nhanvien.add',['listTitle'=>$listTitle]);
    }
    public function store(ValidateAddStaff $request)
    {
        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
        $get_image->move('/public/admin/images',$new_image);
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
        $staffs->title = $request->title;
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
        $listStaffs = Staff::find($id);
        return view('admin.nhanvien.list-nhanvien.index',['listStaffs'=>$listStaffs]);
    }
    public function update(ValidateEditStaff $request, $id)
    {
<<<<<<< HEAD
        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
        $get_image->move('/public/admin/images',$new_image);
        $staffs = new Staff;
        $arr['code'] = $request->code;
        $arr['name'] = $request->name;
        $arr['gender'] = $request->gender;
        $arr['avatar'] = $request->$name_image;
        $arr['phone'] = $request->phone;
        $arr['email'] = $request->email;
        $arr['address'] = $request->address;
        $arr['contract'] = $request->contract;
        $arr['wage'] = $request->wage;
        $arr['title'] = $request->title;
        $arr['status'] = $request->status;
        $staffs::where('id', $id)->update($arr);
        Alert()->success('thành công','bạn đã sửa nhân viên thành công');
=======
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

>>>>>>> 27a7bb4eb575111c76b64362e02d4922322d5204
        return redirect()->action('Nhanvien\ListnhanvienController@index');
    }
    public function destroy($id)
    {
        Staff::find($id)->delete();
        Alert()->success('thành công','bạn đã xóa nhân viên thành công');
        return back();
    }
}
