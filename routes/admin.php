

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
Route::get('xemtaikhoan','UserController@index')->name('user.index')->middleware('can:user');
Route::get('themtaikhoan','UserController@create')->name('user.add')->middleware('can:user');
Route::post('themtaikhoan/post','UserController@store')->name('user.store')->middleware('can:user');
//auth
Route::get('/dashboard','AdminController@index')->name('dashboard');
Route::get('/customer','CustomerController@index')->name('customer');


//=========================Nhân viên==================//
//list nhân viên
Route::get('/nhan-vien','Nhanvien\ListnhanvienController@index')->name('listnhanvien')->middleware('can:Staff');
Route::get('/addnhanvien','Nhanvien\ListnhanvienController@create')->name('listnhanvien.add')->middleware('can:Staff');
Route::get('/editnhanvien/{id}','Nhanvien\ListnhanvienController@edit')->name('listnhanvien.edit')->middleware('can:Staff');
// Ca làm việc

Route::get('/calamviec','Nhanvien\CalamviecController@index')->name('calamviec');
Route::get('/addcalamviec','Nhanvien\CalamviecController@create')->name('calamviec.add');
Route::post('/addcalamviec','Nhanvien\CalamviecController@store')->name('calamviec.add');
Route::get('/edit/{id}','Nhanvien\CalamviecController@edit')->name('calamviec.edit');
Route::post('/edit/{id}','Nhanvien\CalamviecController@update')->name('calamviec.edit');
Route::get('/addcalamviec/delete/{id}','Nhanvien\CalamviecController@destroy')->name('calamviec.delete');

//Ca làm việc nhân viên
Route::get('/calamviecnhanvien','Nhanvien\CalamviecNhanVien@index')->name('calamviecnhanvien');
Route::get('/addcalamviecnhanvien','Nhanvien\CalamviecNhanVien@create')->name('calamviecnhanvien.add');

//========================Users========================//
//nhom quyền
Route::get('/nhomquyen','Users\NhomquyenController@index')->name('nhomquyen');
Route::get('/addnhomquyen','Users\NhomquyenController@create')->name('nhomquyen.add');
});
