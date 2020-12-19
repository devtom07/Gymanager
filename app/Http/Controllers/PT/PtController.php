<?php

namespace App\Http\Controllers\PT;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\PtProgram;
use App\Models\Services;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PtController extends Controller
{
    public function index(){
       $user_id = Auth::user()->id;
       $pt = User::where('id',$user_id)->get();
       foreach ($pt as $pts){
          $pt_id = $pts->staff->id;
       }
       $customer_pt = PtProgram::where('pt_id',$pt_id)->get();
       foreach ($customer_pt as $customers){
           $customer_id = $customers->id;
       }
       $count_customer = PtProgram::has('customer')->where('pt_id',$pt_id)->count();
        return view('admin.pt.index',compact('pt','customer_pt','count_customer'));
    }
    public function addPt(){

        return view('admin.pt.add');

    }
}
