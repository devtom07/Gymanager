<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\ValidateFormAddCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer.index',compact('customers'));
    }
    public function add()
    {
        return view('admin.customer.add');
    }
    public function edit(){
        $pt_level = DB::table('pt_levels');
        return view('admin.customer.edit',compact('pt_level'));
    }
    public function store(ValidateFormAddCustomer $request){
       $code = substr(md5(microtime()), rand(0, 26), 5);
        DB::beginTransaction();
       Customer::insert([
           'code' => $code,
          'name' => $request->name,
           'phone' => $request->phone,
           'level' => $request->level,
           'address' => $request->address,
           'contract_code' => $request->contract_code,
           'email'   => $request->email,
           'sex' => $request->customRadio,
            'note' => $request->note,
           'identity_card' => $request->identity_card,
       ]);
        DB::commit();
        Alert()->success('thành công','thêm khách hàng thành công');
        return redirect()->route('customer.index');
    }
}