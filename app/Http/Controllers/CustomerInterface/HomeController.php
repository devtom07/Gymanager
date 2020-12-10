<?php

namespace App\Http\Controllers\CustomerInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('customers.customer_training.index');
    }
    public function profile($id){
    	$customer_account = CustomerAccount::find($id);
    	return view('customers.customer_training.profile', compact($customer_account));
    }
}
