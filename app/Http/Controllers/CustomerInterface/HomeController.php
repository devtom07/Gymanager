<?php

namespace App\Http\Controllers\CustomerInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\CustomerAccount;
use App\Http\Requests\CustomerAccount\ChangePasswordRequest;
use Illuminate\Support\Facades\DB;   
use App\Models\Service;

class HomeController extends Controller
{
    public function index(){
    	return view('customers.customer_training.index');
    }
    public function profile($id){
    	$customer_account = CustomerAccount::with('customer')->where('id',$id)->get();
    	foreach ($customer_account as $customer_accounts ) {
    		$customer_id = $customer_accounts->id_customer;
    	}
    	$customer = Customer::where('id',$customer_id)->get();
        foreach ($customer as $customers) {
            $customers_id = $customers->id;
        }
        $service = Service::where('id_customer',$customers_id)->get();
    	return view('customers.customer_training.profile', compact('customer_account','customer', 'service'));
    }

    public function changePassword(){
        
        return view('customers.customer_training.change_password');
    }

    public function postChangePassword(ChangePasswordRequest $request,$id){
        $data = array();
       // $password=$request->password;
       $data['password'] = \Illuminate\Support\Facades\Hash::make($request->password);
        DB::table('customer_accounts')->where('id',$id)->update($data);
        Alert()->success('Thành công','Bạn đã cập nhập mật khẩu thành công');
        return redirect()->back();
    }
}
