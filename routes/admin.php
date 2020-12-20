<?php

use Illuminate\Support\Facades\Route;


//login
Route::get('dangnhap', 'Admin\AuthurController@admin')->name('admin');
Route::match(['post', 'get'], '/login', 'Admin\AuthurController@login')->name('login');
Route::get('/logout', 'Admin\AuthurController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        //auth
        Route::get('/dashboard', 'Admin\AdminController@index')
            ->name('dashboard');
        Route::get('/customer', 'KhachHang\CustomerController@index')
            ->name('customer');
        //Chức vụ
        Route::get('/chucvu', 'Users\RoleController@index')
            ->name('role');
        Route::get('/themchucvu', 'Users\RoleController@create')
            ->name('role.add');
        Route::post('/themchucvu/post', 'Users\RoleController@store')
            ->name('role.store');
        Route::get('/suachucvu/{id}', 'Users\RoleController@edit')
            ->name('role.edit');
        Route::post('/suachucvu/post/{id}', 'Users\RoleController@update')
            ->name('role.update');
        Route::get('/xoachucvu/{id}', 'Users\RoleController@destroy')
            ->name('role.delete');
        //quyền
        Route::get('/chucnang', 'Users\PermissionController@index')
            ->name('permission.index');
        Route::get('/themchucnang', 'Users\PermissionController@add')
            ->name('permission.add');
        Route::get('/suachucnang/{id}', 'Users\PermissionController@edit')
            ->name('permission.edit');
        Route::post('/themchucnang/post', 'Users\PermissionController@store')
            ->name('permission.store');
        Route::post('/suachucnang/post/{id}', 'Users\PermissionController@update')
            ->name('permission.update');
        Route::get('/xoachucnang/{id}', 'Users\PermissionController@destroy')
            ->name('permission.destroy');

        Route::get('xemtaikhoan', 'Users\UserController@index')
            ->name('user.index')
            ->middleware(['permission:xem tài khoản']);
        Route::get('themtaikhoan', 'Users\UserController@create')
            ->name('user.add')
            ->middleware(['permission:thêm tài khoản']);
        Route::post('themtaikhoan/post', 'Users\UserController@store')
            ->name('user.store')
            ->middleware(['permission:thêm tài khoản']);
        Route::get('suataikhoan/{id}', 'Users\UserController@edit')
            ->name('user.edit')
            ->middleware(['permission:Sửa tài khoản']);
        Route::post('suataikhoan/post/{id}', 'Users\UserController@update')
            ->name('user.update')
            ->middleware(['permission:Sửa tài khoản']);
        Route::get('xemchitiettaikhoan/{id}', 'Users\UserController@show')
            ->name('user.show')
            ->middleware(['permission:Xem tài khoản']);
        Route::get('GetUser/{id}', 'Users\UserController@GetUser')
            ->name('user.GetUser')
            ->middleware(['permission:Xem tài khoản']);
        Route::get('xoanguoidung/{id}', 'Users\UserController@destroy')
            ->name('user.delete')
            ->middleware(['permission:Xóa tài khoản']);
        Route::get('profile/{id}', 'Users\UserController@profile')
            ->name('user.profile');
        Route::post('ImageProfile/{id}', 'Users\UserController@ImageProfile')
            ->name('user.ImageProfile');
        Route::post('profile/update/{id}', 'Users\UserController@updateProfile')
            ->name('user.updateProfile');
        Route::post('profile/update/password/{id}', 'Users\UserController@updatePassword')
            ->name('user.updatePassword');

        //=========================Nhân viên==================//
        //nhân viên
        Route::get('/nhan-vien', 'Nhanvien\ListnhanvienController@index')
            ->name('listnhanvien')
            ->middleware(['permission:Xem nhân viên']);
        Route::get('/them-nhan-vien', 'Nhanvien\ListnhanvienController@create')
            ->name('listnhanvien.add')
            ->middleware(['permission:Thêm nhân viên']);
        Route::post('/them-nhan-vien/post', 'Nhanvien\ListnhanvienController@store')
            ->name('listnhanvien.store')
            ->middleware(['permission:Thêm nhân viên']);
        Route::get('/sua-nhan-vien/{id}', 'Nhanvien\ListnhanvienController@edit')
            ->name('staff.edit')
            ->middleware(['permission:Sửa nhân viên']);
        Route::post('/sua-nhan-vien/post/{id}', 'Nhanvien\ListnhanvienController@update')
            ->name('staff.update')
            ->middleware(['permission:Sửa nhân viên']);
        Route::get('/staff-delete/{id}', 'Nhanvien\ListnhanvienController@destroy')
            ->name('deleteStaff');

        // chức vụ
        Route::get('/chuc-vu', 'Nhanvien\PositionController@index')
            ->name('listposition');
        Route::get('/them-chuc-vu', 'Nhanvien\PositionController@create')
            ->name('position.add');
        Route::post('/them-chuc-vu/post', 'Nhanvien\PositionController@store')
            ->name('position.store');
        Route::get('/sua-chuc-vu/{id}', 'Nhanvien\PositionController@edit')
            ->name('position.edit');
        Route::post('/sua-chuc-vu/post/{id}', 'Nhanvien\PositionController@update')
            ->name('position.update');
        Route::get('/chuc-vu-xoa/{id}', 'Nhanvien\PositionController@destroy')
            ->name('position.delete');

        // Ca làm việc
        Route::get('/calamviec', 'Nhanvien\CalamviecController@index')
            ->name('calamviec');
        Route::get('/addcalamviec', 'Nhanvien\CalamviecController@create')
            ->name('calamviec.add');
        Route::post('/addcalamviec', 'Nhanvien\CalamviecController@store')
            ->name('calamviec.store');
        Route::get('/edit/{id}', 'Nhanvien\CalamviecController@edit')
            ->name('calamviec.update');
        Route::post('/edit/{id}', 'Nhanvien\CalamviecController@update')
            ->name('calamviec.edit');
        Route::get('/addcalamviec/delete/{id}', 'Nhanvien\CalamviecController@destroy')
            ->name('calamviec.delete');

        //Ca làm việc nhân viên
        Route::get('/ca-lam-viec-nhan-vien', 'Nhanvien\WorkSiftStaffController@index')
            ->name('calamviecnhanvien');
        Route::get('/them-ca-lam-viec-nv', 'Nhanvien\WorkSiftStaffController@create')
            ->name('calamviecnhanvien.add');
        Route::post('/them-ca-lam-viec-nv', 'Nhanvien\WorkSiftStaffController@store')
            ->name('calamviecnhanvien.post');
        Route::get('/sua-ca-lam-viec-nv/{id}', 'Nhanvien\WorkSiftStaffController@show')
            ->name('suacalamviecnhanvien');
        Route::post('/sua-ca-lam-viec-nv/{id}', 'Nhanvien\WorkSiftStaffController@update')
            ->name('suacalamviecnhanvien');
        Route::get('/xoa/{id}', 'Nhanvien\WorkSiftStaffController@destroy')
            ->name('xoacalamviecvn');

        //customers
        Route::get('khachhang', 'KhachHang\CustomerController@index')
            ->name('customer.index');
        Route::get('themkhachhang', 'KhachHang\CustomerController@add')
            ->name('customer.add');
        Route::get('suakhachhang/{id}', 'KhachHang\CustomerController@edit')
            ->name('customer.edit');
        Route::post('themkhachhang/post', 'KhachHang\CustomerController@store')
            ->name('customer.store');
        Route::post('suakhachhang/post/{id}', 'KhachHang\CustomerController@update')
            ->name('customer.update');
        Route::get('xoakhachhang/{id}', 'KhachHang\CustomerController@destroy')
            ->name('customer.delete');
        Route::get('GetCustomer/{id}', 'KhachHang\CustomerController@show')
            ->name('customer.show');
        //Dịch vụ
        Route::get('/dich-vu', 'Dichvu\ServiceController@index')
            ->name('service');
        Route::get('/them-dich-vu', 'Dichvu\ServiceController@create')
            ->name('service.add');
        Route::post('/them-dich-vu', 'Dichvu\ServiceController@store')
            ->name('service.store');
        Route::get('/edit_dichvu/{id}', 'Dichvu\ServiceController@edit')
            ->name('service.edit');
        Route::post('/edit_dichvu/{id}', 'Dichvu\ServiceController@update')
            ->name('service.update');
        Route::get('/delete_dichvu/{id}', 'Dichvu\ServiceController@destroy')
            ->name('service.delete');
        //ca tap
        Route::get('catap', 'Dichvu\HymnalController@index')
            ->name('hymnal.index');
        Route::get('themcatap', 'Dichvu\HymnalController@add')
            ->name('hymnal.add');
        Route::get('suacatap/{id}', 'Dichvu\HymnalController@edit')
            ->name('hymnal.edit');
        Route::post('catap/post', 'Dichvu\HymnalController@store')
            ->name('hymnal.store');
        Route::post('suacatap/post/{id}', 'Dichvu\HymnalController@update')
            ->name('hymnal.update');
        Route::get('xoacatap/{id}', 'Dichvu\HymnalController@destroy')
            ->name('hymnal.delete');

        //Pt
        Route::get('Pt', 'PT\PtController@index')
            ->name('pt.index');
        Route::get('dangKyPt', 'PT\PtController@addPt')
            ->name('pt.add');
        Route::get('lich-day-pt','PT\PtController@teaching')
            ->name('pt.teaching');
        Route::get('xep-lich-hoc/{id}','PT\PtController@addTrainingPt')
            ->name('pt.addTrainingPt');
        Route::get('lich-hoc-hoc-vien/{id}','PT\PtController@ptStudent')
            ->name('pt.ptStudent');
        Route::post('xep-lich-hoc/post/{id}','PT\PtController@storeTrainingPt')
            ->name('pt.storeTrainingPt');
        //pt-level
        Route::get('goi-cuoc', 'KhachHang\PackageController@index')
            ->name('package.index');
        Route::get('them-goi-cuoc', 'KhachHang\PackageController@create')
            ->name('package.create');
        Route::post('them-goi-cuoc', 'KhachHang\PackageController@add')
            ->name('package.add');
        Route::get('sua-goi-cuoc/{id}', 'KhachHang\PackageController@edit')
            ->name('package.edit');
        Route::post('sua-goi-cuoc/{id}', 'KhachHang\PackageController@update')
            ->name('package.edit');
        Route::get('xoa-goi-cuoc/{id}', 'KhachHang\PackageController@delete')
            ->name('package.delete');

        //=========================Sản phẩm==================//
        //san pham
        Route::get('/san-pham', 'Sanpham\ProductController@index')
            ->name('listproduct');
        Route::get('/them-san-pham', 'Sanpham\ProductController@create')
            ->name('product.add');
        Route::post('/them-san-pham/post', 'Sanpham\ProductController@store')
            ->name('product.store');
        Route::get('/sua-san-pham/{id}', 'Sanpham\ProductController@edit')
            ->name('product.edit');
        Route::post('/sua-san-pham/post/{id}', 'Sanpham\ProductController@update')
            ->name('product.update');
        Route::get('/san-pham-xoa/{id}', 'Sanpham\ProductController@destroy')
            ->name('product.delete');
        Route::get('/show_san_pham/{id}', 'Sanpham\ProductController@show')
            ->name('product.sanpham_ban');
        Route::get('/san-pham-all/{id}', 'Sanpham\ProductController@delete')
            ->name('product.xoa');

        //loai san pham
        Route::get('/loai-san-pham', 'Sanpham\CategoryController@index')
            ->name('listcategory');
        Route::get('/them-loai-san-pham', 'Sanpham\CategoryController@create')
            ->name('category.add');
        Route::post('/them-loai-san-pham/post', 'Sanpham\CategoryController@store')
            ->name('category.store');
        Route::get('/sua-loai-san-pham/{id}', 'Sanpham\CategoryController@edit')
            ->name('category.edit');
        Route::post('/sua-loai-san-pham/post/{id}', 'Sanpham\CategoryController@update')
            ->name('category.update');
        Route::get('/loai-san-pham-xoa/{id}', 'Sanpham\CategoryController@destroy')
            ->name('category.delete');

        //Pt-program
        Route::get('/chuong-trinh-PT', 'PT\PtProgramController@index')
            ->name('ptProgram.index');
        Route::get('/them-chuong-trinh-PT', 'PT\PtProgramController@add')
            ->name('ptProgram.add');
        Route::post('/them-chuong-trinh-PT', 'PT\PtProgramController@store')
            ->name('ptProgram.store');
        Route::get('/sua-chuong-trinh-PT/{id}', 'PT\PtProgramController@edit')
            ->name('ptProgram.edit');
        Route::post('/cap-nhat-chuong-trinh-PT/{id}', 'PT\PtProgramController@update')
            ->name('ptProgram.update');
        Route::get('/xoa-chuong-trinh-PT/{id}', 'PT\PtProgramController@destroy')
            ->name('ptProgram.delete');
        Route::get('getPackage/{id}', 'PT\PtProgramController@getPackage')
            ->name('ptProgram.getPacket');
        Route::get('/lich-day', 'PT\PtProgramController@training')
            ->name('ptProgram.training');
        Route::get('/thong-tin-pt', 'PT\PtProgramController@profilePt')
            ->name('ptProgram.profilePt');
        //tài khoản khách hàng
        Route::get('/tai-khoan-khach', 'CustomerAccount\CustomerAccountController@index')
            ->name('customer_account');
        Route::get('/them-tai-khoan-khach/', 'CustomerAccount\CustomerAccountController@create')
            ->name('customer_account.add');
        Route::post('/them-tai-khoan-khach', 'CustomerAccount\CustomerAccountController@store')
            ->name('customer_account.add');
        Route::get('/sua-tai-khoan-khach/{id}', 'CustomerAccount\CustomerAccountController@edit')
            ->name('customer_account.edit');
        Route::post('/tai-khoan-khach/{id}', 'CustomerAccount\CustomerAccountController@update')
            ->name('customer_account.edit');
        Route::get('/xoa-tai-khoan-khach/{id}', 'CustomerAccount\CustomerAccountController@destroy')
            ->name('customer_account.delete');
        Route::get('/search-khoan-khach/search', 'CustomerAccount\CustomerAccountController@search')
            ->name('customer_account.search');
        //liên hệ
        Route::get('/lien-he-admin', 'Admin\AdminController@contact')->name('contact.admin');
        Route::get('/xóa-lien-he/{id}', 'Admin\AdminController@deleteContact')->name('contact.delete');

        //-quan lý danh sách của khách đăng kí form
        Route::get('/danh-sach-dang-ki', 'Admin\AdminController@listForm')->name('listForm');
        Route::get('/xoa-danh-sach-dang-ki/{id}', 'Admin\AdminController@deleteListForm')->name('listForm.delete');
        Route::get('/status/{id}', 'Admin\AdminController@statusForm' )->name('statusForm');
});
});