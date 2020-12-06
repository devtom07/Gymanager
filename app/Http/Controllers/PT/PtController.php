<?php

namespace App\Http\Controllers\PT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PT;
use App\Http\Requests\ValidateAddPt;
use App\Http\Requests\ValidateEditPt;

class PtController extends Controller
{
    public function index()
    {
        $listPt = PT::all();
        return view('admin.pt.index',['listPt'=>$listPt]);
    }

    public function create()
    {
        return view('admin.pt.add');
    }

    public function store(ValidateAddPt $request)
    {
        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
        $get_image->move('pt',$new_image);
        $pt = new PT;
        $pt->code = $request->code;
        $pt->name = $request->name;
        $pt->gender = $request->gender;
        $pt->phone = $request->phone;
        $pt->email = $request->email;
        $pt->address = $request->address;
        $pt->status = $request->status;
        $pt->contract = $request->contract;
        $pt->wage = $request->wage;
        $pt->start_day = $request->start_day;
        $pt->end_day = $request->end_day;
        $pt->id_card = $request->id_card;
        $pt->issued_on = $request->issued_on;
        $pt->issued_by = $request->issued_by;
        $pt['avatar'] = $new_image;
        $pt->save();
        Alert()->success('thành công','bạn đã thêm nhân viên thành công');
        return redirect()->action('PT\PtController@index');
    }

    public function show($id)
    {
        $listPt = PT::find($id);
        return view('admin.pt.detail',['listPt'=>$listPt]);
    }

    public function edit($id)
    {
        $listPt = PT::find($id);
        return view('admin.pt.detail',['listPt'=>$listPt]);
    }

    public function update(ValidateEditPt $request, $id)
    {
        $get_image = $request->file('avatar');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
            $get_image->move('pt',$new_image);
            $staffs = new PT;
            $arr['code'] = $request->code;
            $arr['name'] = $request->name;
            $arr['gender'] = $request->gender;
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
            $staffs = new PT;
            $arr['code'] = $request->code;
            $arr['name'] = $request->name;
            $arr['gender'] = $request->gender;
            $arr['phone'] = $request->phone;
            $arr['email'] = $request->email;
            $arr['address'] = $request->address;
            $arr['contract'] = $request->contract;
            $arr['wage'] = $request->wage;
            $arr['title'] = $request->title;
            $arr['status'] = $request->status;
            $staffs->where('id', $id)->update($arr);
        }
       return redirect()->action('PT\PtController@index');
    }

    public function destroy($id)
    {
        PT::find($id)->delete();
        Alert()->success('thành công','bạn đã xóa nhân viên thành công');
        return back();
    }
}
