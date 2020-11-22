<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer.index');
    }
    public function add()
    {
        return view('admin.customer.add');
    }
}
