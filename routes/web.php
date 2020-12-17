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


require_once 'admin.php';
require_once 'fontend.php';
Route::get('/login-khach-hang','CustomerInterface\LoginController@index')->name('loginCustomer');
Route::post('/login-khach-hang','CustomerInterface\LoginController@loginCustomer')->name('loginCustomer');
Route::get('/logout-khach-hang','CustomerInterface\LoginController@logoutCustomer')->name('logoutCustomer');

Route::group([ 'prefix' => '/', 'middleware'=>'checkAuth'], function () {

Route::get('/khach-hang','CustomerInterface\HomeController@index')->name('khachhang.index');

Route::get('/profile-khach-hang/{id}','CustomerInterface\HomeController@profile')->name('profile');
Route::get('/doi-mat-khau', 'CustomerInterface\HomeController@changePassword')->name('changePassword');
Route::post('/doi-mat-khau/{id}', 'CustomerInterface\HomeController@postChangePassword')->name('changePassword.a');
});

