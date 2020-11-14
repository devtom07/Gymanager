

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
//login
Route::get('dangnhap','AuthurController@admin')->name('admin');
Route::match(['post','get'],'/login','AuthurController@login')->name('login');
Route::get('/logout','AuthurController@logout')->name('logout');

 Route::middleware(['auth'])->group(function (){

//user
Route::get('xemtaikhoan','UserController@index')->name('user.index');
Route::get('themtaikhoan','UserController@create')->name('user.add');
Route::post('themtaikhoan/post','UserController@store')->name('user.store');
//auth
Route::get('/dashboard','AdminController@index')->name('dashboard');
Route::get('/customer','CustomerController@index')->name('customer');


//=========================Nhân viên==================//
//list nhân viên
Route::get('/nhan-vien','Nhanvien\ListnhanvienController@index')->name('listnhanvien');
Route::get('/addnhanvien','Nhanvien\ListnhanvienController@create')->name('listnhanvien.add');
Route::get('/editnhanvien/{id}','Nhanvien\ListnhanvienController@edit')->name('listnhanvien.edit');
// Ca làm việc
Route::get('/calamviec','CalamviecController@index')->name('calamviec');
Route::get('/addcalamviec','CalamviecController@create')->name('calamviec.add');
Route::post('/addcalamviec','CalamviecController@store')->name('calamviec.add');
Route::get('/edit/{id}','CalamviecController@edit')->name('calamviec.edit');
Route::post('/edit/{id}','CalamviecController@update')->name('calamviec.edit');
Route::get('/addcalamviec/delete/{id}','Nhanvien\CalamviecController@destroy')->name('calamviec.delete');

//Ca làm việc nhân viên
Route::get('/ca-lam-viec-nhan-vien','Nhanvien\WorkSiftStaffController@index')->name('calamviecnhanvien');
Route::get('/them-ca-lam-viec-nv','Nhanvien\WorkSiftStaffController@create')->name('calamviecnhanvien.add');
Route::post('/them-ca-lam-viec-nv','Nhanvien\WorkSiftStaffController@store')->name('calamviecnhanvien.post');
Route::get('/sua-ca-lam-viec-nv/{id}','Nhanvien\WorkSiftStaffController@show')->name('suacalamviecnhanvien');
Route::post('/sua-ca-lam-viec-nv/{id}','Nhanvien\WorkSiftStaffController@update')->name('suacalamviecnhanvien');
Route::get('/xoa/{id}', 'Nhanvien\WorkSiftStaffController@destroy')->name('xoacalamviecvn');

//========================Users========================//
//nhom quyền
Route::get('/nhomquyen','Users\NhomquyenController@index')->name('nhomquyen');
Route::get('/addnhomquyen','Users\NhomquyenController@create')->name('nhomquyen.add');
});
