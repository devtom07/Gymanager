<?php

namespace App\Http\Controllers\CustomerAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerAccount;
use App\Models\Customer;
use App\Http\Requests\CustomerAccountRequest;
use App\Http\Requests\CustomerAccount\CustomerAccountEditRequest;

class CustomerAccountController extends Controller
{

    public function index()
    {
        //
        $cutomer_account = CustomerAccount::with('customer')->orderBy('id','desc')->get();
        return view('admin.customer_account.index', compact('cutomer_account'));

    }


    public function create()
    {
        //
        $customer = Customer::all();
        return view('admin.customer_account.add',compact('customer'));
    }


    public function store(CustomerAccountRequest $request)
    {
        //
        $customer_account = new CustomerAccount;
        $customer_account->name=$request->name;
        $customer_account->email=$request->email;
        $customer_account->password=\Illuminate\Support\Facades\Hash::make($request->password);
        $customer_account->status=$request->status;
        $customer_account->id_customer=$request->id_customer;
        $customer_account->save();
        return redirect()->route('customer_account')->with('thongbao','thêm thành công');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
        $customer_account = CustomerAccount::find($id);
        $customer = Customer::all();
        return view('admin.customer_account.edit', compact('customer_account','customer'));
    }


    public function update(CustomerAccountEditRequest $request, $id)
    {
        //
        $customer_account=new CustomerAccount;
        $customer_account->name=$request->name;
        $customer_account->email=$request->email;
        $customer_account->password=\Illuminate\Support\Facades\Hash::make($request->password);
        $customer_account->id_customer=$request->id_customer;
        $customer_account->status=$request->status;
        $customer_account->update();
        return redirect(route('customer_account'))->with('thongbao', 'Sửa thành công');
    }


    public function destroy($id)
    {
        //
        $customer_account=CustomerAccount::find($id);
        $customer_account->delete();
        return redirect()->back()->with('thongbao','Xóa thành công');
    }
}
