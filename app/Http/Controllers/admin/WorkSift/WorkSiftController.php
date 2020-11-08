<?php

namespace App\Http\Controllers\admin\WorkSift;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkSiftController extends Controller
{
    //
   	public function index(){
   		return view('admin.nhanvien.WorkSift.index');
   	} 
}
