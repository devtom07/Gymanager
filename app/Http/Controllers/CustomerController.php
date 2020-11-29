<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer.index',compact('customers'));
    }
    public function add()
    {
        $pt_level = DB::table('pt_levels');
        return view('admin.customer.add',compact('pt_level'));
    }
    public function edit(){
        $pt_level = DB::table('pt_levels');
        return view('admin.customer.edit',compact('pt_level'));
    }
}
