<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\ValidateFormAddCustomer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    public function index()
    {
        $date = new \DateTime();
        $customers = Customer::all();
        return view('admin.customer.index',compact('customers','date'));
    }
    public function add()
    {
        return view('admin.customer.add',compact('pt_level'));
    }
    public function edit($id){
        $customer = Customer::where('id',$id)->get();
        return view('admin.customer.edit',compact('customer'));
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
    public function update(ValidateFormAddCustomer $request,$id){
        DB::beginTransaction();
        Customer::where('id',$id)->update([
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
    public function destroy($id){
        Customer::find($id)->delete();
        Alert()->success('thành công','thêm khách hàng thành công');
        return redirect()->route('customer.index');
    }
    public function show($id){
        $customer = Customer::where('id',$id)->get();
        return json_encode(array('data'=>$customer));

    }
}
