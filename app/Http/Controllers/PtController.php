<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Services;
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
       $customer_pt = Services::where('id_coach',$pt_id)->get();
       foreach ($customer_pt as $customers){
           $customer_id = $customers->id;
       }
       $count_customer = Services::has('customer')->where('id_coach',$pt_id)->count();
        return view('admin.pt.index',compact('pt','customer_pt','count_customer'));
    }
    public function addPt(){

        return view('admin.pt.add');

    }
}
