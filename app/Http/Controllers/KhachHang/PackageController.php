<?php

namespace App\Http\Controllers\KhachHang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    //
    public function index(){
    	$package = Package::all();
    	return view('admin.customer.package.index',compact('package'));
    }
    public function create()
    {
    	return view('admin.customer.package.add');
    }
    public function add(Request $request){
    	$package=new Package;
    	$package->name=$request->name;
    	$package->price=$request->price;
    	$package->type_use=$request->type_use;
    	$package->status=$request->status;
    	$package->free_service=json_encode($request->free_service);
    	$package->desc=$request->desc;
    	$package->id_catap=$request->id_catap;
    	$package->start_date=$request->start_date;
    	$package->end_date=$request->end_date;
    	$package->save();
    	return redirect()->route('package.index')->with('thongbao', 'thêm thành công!!');

    }
    public function edit($id){
    	$package=Package::find($id);
    	return view('admin.customer.package.edit',compact('package'));
    }
    public function update(Request $request,$id){
    	$package=Package::find($id);
    	$package->name=$request->name;
    	$package->price=$request->price;
    	$package->type_use=$request->type_use;
    	$package->status=$request->status;
    	$package->free_service=json_encode($request->free_service);
    	$package->desc=$request->desc;
    	$package->id_catap=$request->id_catap;
    	$package->start_date=$request->start_date;
    	$package->end_date=$request->end_date;
    	$package->update();
    	return redirect()->route('package.index')->with('thongbao', 'sửa thành công!!');

    }
    public function delete($id){
    	$package=Package::find($id);
    	$package->delete();
    	return back()->with('thongbao','xóa thành công');
    }
}
