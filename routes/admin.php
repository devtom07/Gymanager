

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
     Route::prefix('Admin')->group(function (){
     Route::get('/dashboard','AdminController@index')->name('dashboard');
//user
Route::get('xemtaikhoan','UserController@index')
    ->name('user.index')
    ->middleware('permission:list user');
Route::get('themtaikhoan','UserController@create')
    ->name('user.add')
    ->middleware('permission:add user');
Route::post('themtaikhoan/post','UserController@store')
    ->name('user.store');
Route::get('datatable','UserController@anyData')->name('user.datatable');
//auth
Route::get('/customer','CustomerController@index')->name('customer');


//=========================Nhân viên==================//
//list nhân viên
Route::get('/nhan-vien','Nhanvien\ListnhanvienController@index')->name('listnhanvien');
Route::get('/addnhanvien','Nhanvien\ListnhanvienController@create')->name('listnhanvien.add');
Route::get('/editnhanvien/{id}','Nhanvien\ListnhanvienController@edit')->name('listnhanvien.edit')->middleware('can:Staff');
// Ca làm việc
Route::get('/calamviec','Nhanvien\CalamviecController@index')->name('calamviec');
Route::get('/addcalamviec','Nhanvien\CalamviecController@create')->name('calamviec.add');
//Ca làm việc nhân viên
Route::get('/calamviecnhanvien','Nhanvien\CalamviecNhanVien@index')->name('calamviecnhanvien');
Route::get('/addcalamviecnhanvien','Nhanvien\CalamviecNhanVien@create')->name('calamviecnhanvien.add');

//========================User========================//
//nhom quyền
Route::get('/nhomquyen','User\NhomquyenController@index')->name('nhomquyen');
Route::get('/addnhomquyen','User\NhomquyenController@create')->name('nhomquyen.add');
});
 });
