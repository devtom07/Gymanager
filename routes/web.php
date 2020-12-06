<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// dao dien customers


Route::get('/khach-hang','CustomerInterface\HomeController@index');
Route::get('/login-khach-hang','CustomerInterface\LoginController@index');
Route::get('/profile-khach-hang','CustomerInterface\HomeController@profile');


require_once 'admin.php';
require_once 'fontend.php';