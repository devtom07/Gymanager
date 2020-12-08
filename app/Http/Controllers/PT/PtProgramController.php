<?php

namespace App\Http\Controllers\PT;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Staff;
use Illuminate\Http\Request;

class PtProgramController extends Controller
{
    public function index(){

         return view('admin.pt_program.index');
    }

    public function add(){

     $customer = Customer::all();
     $pt = Staff::where('position','2')->get();
     $package = Package::all();
        return view('admin.pt_program.add',compact('customer','pt','package'));

    }
    public function getPackage($id){
        $Get_package = Package::where('id',$id)->get();
        return response()->json(['data' =>$Get_package]);
    }


    public function edit(){
        return view('admin.pt_program.edit');

    }
    public function store(){

    }
    public function update(){

    }
    public function delete(){

    }

}
