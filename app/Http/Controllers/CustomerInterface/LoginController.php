<?php

namespace App\Http\Controllers\CustomerInterface;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\loginCustomerRequest;
use App\Models\CustomerAccount;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   
    //
    public function index(){
    	if (Auth::guard('customer_accounts')->check()) {
            return redirect()->route('khachhang.index');
        }
    	return view('customers.login.login');
    }

    public function loginCustomer(loginCustomerRequest $request){
        $login=[
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('customer_accounts')->attempt($login,$request->remember)) {
            return redirect(route('khachhang.index'));
        }
            Session::put('message','Gmail hoặc mật khẩu không chính xác');
            return redirect(route('loginCustomer'))->with('message', 'Gmail hoặc mật khẩu không chính xác');
    }

    public function logoutCustomer(){
        Auth::guard('customer_accounts')->logout();
        return redirect()->route('loginCustomer');
    }
}
