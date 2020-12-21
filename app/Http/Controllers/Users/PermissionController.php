<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
   public function index(){

      $permission = Permission::all();
       return view('admin.users.permission',compact('permission'));
   }
    public function add(){

        return view('admin.users.permission.add');

    }
    public function edit(){

        return view('admin.users.permission.edit');
    }
    public function store(){

    }
    public function update(){

    }
    public function destroy(){

     }
}
