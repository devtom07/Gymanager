<<<<<<< HEAD



=======
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
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
     Route::prefix('admin')->group(function (){
         //auth
         Route::get('/dashboard','AdminController@index')
             ->name('dashboard');
         Route::get('/customer','CustomerController@index')
             ->name('customer');
         //Chức vụ
         Route::get('/chucvu','RoleController@index')
             ->name('role');
         Route::get('/themchucvu','RoleController@create')
             ->name('role.add');
         Route::post('/themchucvu/post','RoleController@store')
             ->name('role.store');
         Route::get('/suachucvu/{id}','RoleController@edit')
             ->name('role.edit');
         Route::post('/suachucvu/post/{id}','RoleController@update')
             ->name('role.update');
         Route::get('/xoachucvu/{id}','RoleController@destroy')
             ->name('role.delete');
         //quyền
         Route::get('/chucnang','PermissionController@index')
             ->name('permission.index');
         Route::get('/themchucnang','PermissionController@add')
             ->name('permission.add');
         Route::get('/suachucnang/{id}','PermissionController@edit')
             ->name('permission.edit');
         Route::post('/themchucnang/post','PermissionController@store')
             ->name('permission.store');
         Route::post('/suachucnang/post/{id}','PermissionController@update')
             ->name('permission.update');
         Route::get('/xoachucnang/{id}','PermissionController@destroy')
             ->name('permission.destroy');
        //user
<<<<<<< HEAD
        Route::get('xemtaikhoan','UserController@index')
=======
        Route::get('xemtaikhoan','Users\UserController@index')
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
            ->name('user.index')
            ->middleware(['permission:xem tài khoản']);
        Route::get('themtaikhoan','UserController@create')
            ->name('user.add')
            ->middleware(['permission:thêm tài khoản']);
        Route::post('themtaikhoan/post','UserController@store')
            ->name('user.store')
            ->middleware(['permission:thêm tài khoản']);
        Route::get('suataikhoan/{id}','UserController@edit')
            ->name('user.edit')
            ->middleware(['permission:Sửa tài khoản']);
        Route::post('suataikhoan/post/{id}','UserController@update')
            ->name('user.update')
            ->middleware(['permission:Sửa tài khoản']);
        Route::get('xemchitiettaikhoan/{id}','UserController@show')
            ->name('user.show')
            ->middleware(['permission:Xem tài khoản']);
        Route::get('GetUser/{id}','UserController@GetUser')
            ->name('user.GetUser')
            ->middleware(['permission:Xem tài khoản']);
        Route::get('xoanguoidung/{id}','UserController@destroy')
            ->name('user.delete')
            ->middleware(['permission:Xóa tài khoản']);
        Route::get('profile','UserController@profile')
            ->name('user.profile');
        //=========================Nhân viên==================//
        //nhân viên
        Route::get('/nhan-vien','Nhanvien\ListnhanvienController@index')
            ->name('listnhanvien')
            ->middleware(['permission:Xem nhân viên']);
        Route::get('/them-nhan-vien','Nhanvien\ListnhanvienController@create')
            ->name('listnhanvien.add')
            ->middleware(['permission:Thêm nhân viên']);
<<<<<<< HEAD
=======
        Route::get('/chi-tiet-nhan-vien/{id}','Nhanvien\ListnhanvienController@show')
        ->name('staff.show');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        Route::post('/them-nhan-vien/post','Nhanvien\ListnhanvienController@store')
            ->name('listnhanvien.store')
            ->middleware(['permission:Thêm nhân viên']);
        Route::get('/sua-nhan-vien/{id}','Nhanvien\ListnhanvienController@edit')
            ->name('staff.edit')
            ->middleware(['permission:Sửa nhân viên']);
<<<<<<< HEAD
        Route::post('/sua-nhan-vien/post/{id}','Nhanvien\ListnhanvienController@update')
=======
        Route::post('/sua-nhan-vien/{id}','Nhanvien\ListnhanvienController@update')
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
            ->name('staff.update')
            ->middleware(['permission:Sửa nhân viên']);
        Route::get('/nhanvien/xoa/{id}','Nhanvien\ListnhanvienController@destroy')
            ->name('staff.delete')
            ->middleware(['permission:Xóa nhân viên']);
        // Ca làm việc
        Route::get('/calamviec','Nhanvien\CalamviecController@index')
            ->name('calamviec');
        Route::get('/addcalamviec','Nhanvien\CalamviecController@create')
            ->name('calamviec.add');
        Route::post('/addcalamviec','Nhanvien\CalamviecController@store')
            ->name('calamviec.store');
        Route::get('/edit/{id}','Nhanvien\CalamviecController@edit')
            ->name('calamviec.update');
        Route::post('/edit/{id}','Nhanvien\CalamviecController@update')
            ->name('calamviec.edit');
        Route::get('/addcalamviec/delete/{id}','Nhanvien\CalamviecController@destroy')
            ->name('calamviec.delete');

        //Ca làm việc nhân viên
        Route::get('/ca-lam-viec-nhan-vien','Nhanvien\WorkSiftStaffController@index')
            ->name('calamviecnhanvien');
        Route::get('/them-ca-lam-viec-nv','Nhanvien\WorkSiftStaffController@create')
            ->name('calamviecnhanvien.add');
        Route::post('/them-ca-lam-viec-nv','Nhanvien\WorkSiftStaffController@store')
            ->name('calamviecnhanvien.post');
        Route::get('/sua-ca-lam-viec-nv/{id}','Nhanvien\WorkSiftStaffController@show')
            ->name('suacalamviecnhanvien');
        Route::post('/sua-ca-lam-viec-nv/{id}','Nhanvien\WorkSiftStaffController@update')
            ->name('suacalamviecnhanvien');
        Route::get('/xoa/{id}', 'Nhanvien\WorkSiftStaffController@destroy')
            ->name('xoacalamviecvn');
        //customers
         Route::get('khachhang','CustomerController@index')
             ->name('customer.index');
         Route::get('themkhachhang','CustomerController@add')
             ->name('customer.add');
         Route::get('suakhachhang/{id}','CustomerController@edit')
             ->name('customer.edit');
         Route::post('themkhachhang/post','CustomerController@store')
             ->name('customer.store');
         Route::post('suakhachhang/post/{id}','CustomerController@update')
             ->name('customer.update');
         Route::get('xoakhachhang/{id}','CustomerController@destroy')
             ->name('customer.delete');
       //pt-level




         });
<<<<<<< HEAD
});
=======
});
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
