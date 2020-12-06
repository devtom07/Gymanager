<?php

namespace App\Http\Controllers\CustomerInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
    	return view('customers.login.login');
    }
}
