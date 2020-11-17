

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
Route::get('suataikhoan/{id}','UserController@edit')->name('user.edit');
Route::post('suataikhoan/post/{id}','UserController@update')->name('user.update');
Route::get('xemchitiettaikhoan/{id}','UserController@show')->name('user.show');
Route::post('Suaquyen/{id}','UserController@updateRole')->name('user.updateRole');
Route::post('Suaanh/{id}','UserController@updateimage')->name('user.updateImage');
Route::get('xoanguoidung/{id}','UserController@destroy')->name('user.delete');



//auth
Route::get('/dashboard','AdminController@index')->name('dashboard');
Route::get('/customer','CustomerController@index')->name('customer');


//=========================Nhân viên==================//
//list nhân viên
Route::get('/nhan-vien','Nhanvien\ListnhanvienController@index')->name('listnhanvien');
Route::get('/addnhanvien','Nhanvien\ListnhanvienController@create')->name('listnhanvien.add');
Route::get('/editnhanvien/{id}','Nhanvien\ListnhanvienController@edit')->name('listnhanvien.edit');
// Ca làm việc
Route::get('/calamviec','Nhanvien\CalamviecController@index')->name('calamviec');
Route::get('/addcalamviec','Nhanvien\CalamviecController@create')->name('calamviec.add');
Route::post('/addcalamviec','Nhanvien\CalamviecController@store')->name('calamviec.add');
Route::get('/edit/{id}','Nhanvien\CalamviecController@edit')->name('calamviec.edit');
Route::post('/edit/{id}','Nhanvien\CalamviecController@update')->name('calamviec.edit');
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
