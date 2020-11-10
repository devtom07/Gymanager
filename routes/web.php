<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
//     $role = Role::create(['name' => 'Super Admin']);
//     $permission = Permission::create(['name' => 'list PT']);
//     $user = \App\User::find(2);
//     $user->givePermissionTo('add user');
//     $role = Role::find(2);
//     $role->syncPermissions('add user');
 });
require_once 'admin.php';

