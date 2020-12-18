<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function index()
    {
        return view('fontend.index');
    }

    public function contact(){
    	return view('fontend.contact.index');
    }
    public function blogs(){
    	return view('fontend.blogs.index');
    }
}
