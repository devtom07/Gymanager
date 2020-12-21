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
            ->name('role')
            ->middleware(['permission:Xem quyền']);
        Route::get('/themchucvu', 'Users\RoleController@create')
            ->name('role.add')
            ->middleware(['permission:Thêm quyền']);
        Route::post('/themchucvu/post', 'Users\RoleController@store')
            ->name('role.store')
            ->middleware(['permission:Thêm quyền']);
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
        //user
        Route::get('xemtaikhoan', 'Users\UserController@index')
            ->name('user.index')
            ->middleware(['permission:Xem tài khoản']);
        Route::get('themtaikhoan', 'Users\UserController@create')
            ->name('user.add')
            ->middleware(['permission:Thêm tài khoản']);
        Route::post('themtaikhoan/post', 'Users\UserController@store')
            ->name('user.store')
            ->middleware(['permission:Thêm tài khoản']);
        Route::get('suataikhoan/{id}', 'Users\UserController@edit')
            ->name('user.edit');
        Route::post('suataikhoan/post/{id}', 'Users\UserController@update')
            ->name('user.update');
        Route::get('xemchitiettaikhoan/{id}', 'Users\UserController@show')
            ->name('user.show')
            ->middleware(['permission:Xem tài khoản']);
        Route::get('GetUser/{id}', 'Users\UserController@GetUser')
            ->name('user.GetUser')
            ->middleware(['permission:Xem tài khoản']);
        Route::get('xoanguoidung/{id}', 'Users\UserController@destroy')
            ->name('user.delete');
        Route::get('profile/{id}', 'Users\UserController@profile')
            ->name('user.profile');
        Route::post('ImageProfile/{id}', 'Users\UserController@ImageProfile')
            ->name('user.ImageProfile');
        Route::post('profile/update/{id}', 'Users\UserController@updateProfile')
            ->name('user.updateProfile');
        Route::post('profile/update/password/{id}', 'Users\UserController@updatePassword')
            ->name('user.updatePassword');
        Route::get('user/search/', 'Users\UserController@search')
            ->name('user.search');
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
            ->name('staff.edit');
        Route::post('/sua-nhan-vien/post/{id}', 'Nhanvien\ListnhanvienController@update')
            ->name('staff.update');
        Route::get('/staff-delete/{id}', 'Nhanvien\ListnhanvienController@destroy')
            ->name('deleteStaff');

        // chức vụ
        Route::get('/chuc-vu', 'Nhanvien\PositionController@index')
            ->name('listposition')
            ->middleware(['permission:Xem chức vụ']);
        Route::get('/them-chuc-vu', 'Nhanvien\PositionController@create')
            ->name('position.add')
            ->middleware(['permission:Thêm chức vụ']);
        Route::post('/them-chuc-vu/post', 'Nhanvien\PositionController@store')
            ->name('position.store')
            ->middleware(['permission:Thêm chức vụ']);
        Route::get('/sua-chuc-vu/{id}', 'Nhanvien\PositionController@edit')
            ->name('position.edit');
        Route::post('/sua-chuc-vu/post/{id}', 'Nhanvien\PositionController@update')
            ->name('position.update');
        Route::get('/chuc-vu-xoa/{id}', 'Nhanvien\PositionController@destroy')
            ->name('position.delete');


        // Ca làm việc
        Route::get('/calamviec', 'Nhanvien\CalamviecController@index')
            ->name('calamviec')
            ->middleware(['permission:Xem ca làm việc']);
        Route::get('/addcalamviec', 'Nhanvien\CalamviecController@create')
            ->name('calamviec.add')
            ->middleware(['permission:Thêm ca làm việc']);
        Route::post('/addcalamviec', 'Nhanvien\CalamviecController@store')
            ->name('calamviec.store')
            ->middleware(['permission:Thêm ca làm việc']);
        Route::get('/edit/{id}', 'Nhanvien\CalamviecController@edit')
            ->name('calamviec.update');
        Route::post('/edit/{id}', 'Nhanvien\CalamviecController@update')
            ->name('calamviec.edit');
        Route::get('/addcalamviec/delete/{id}', 'Nhanvien\CalamviecController@destroy')
            ->name('calamviec.delete');


        //Ca làm việc nhân viên
        Route::get('/ca-lam-viec-nhan-vien', 'Nhanvien\WorkSiftStaffController@index')
            ->name('calamviecnhanvien')
            ->middleware(['permission:Xem ca làm việc nhân viên']);
        Route::get('/them-ca-lam-viec-nv', 'Nhanvien\WorkSiftStaffController@create')
            ->name('calamviecnhanvien.add')
            ->middleware(['permission:Thêm ca làm việc nhân viên']);
        Route::post('/them-ca-lam-viec-nv', 'Nhanvien\WorkSiftStaffController@store')
            ->name('calamviecnhanvien.post')
            ->middleware(['permission:Thêm ca làm việc nhân viên']);
        Route::get('/sua-ca-lam-viec-nv/{id}', 'Nhanvien\WorkSiftStaffController@show')
            ->name('suacalamviecnhanvien');
        Route::post('/sua-ca-lam-viec-nv/{id}', 'Nhanvien\WorkSiftStaffController@update')
            ->name('suacalamviecnhanvien');
        Route::get('/xoa/{id}', 'Nhanvien\WorkSiftStaffController@destroy')
            ->name('xoacalamviecvn');
        //customers
        Route::get('khachhang', 'KhachHang\CustomerController@index')
            ->name('customer.index')
            ->middleware(['permission:Xem khách hàng']);
        Route::get('themkhachhang', 'KhachHang\CustomerController@add')
            ->name('customer.add')
            ->middleware(['permission:Thêm khách hàng']);
        Route::get('suakhachhang/{id}', 'KhachHang\CustomerController@edit')
            ->name('customer.edit');
        Route::post('themkhachhang/post', 'KhachHang\CustomerController@store')
            ->name('customer.store')
            ->middleware(['permission:Thêm khách hàng']);
        Route::post('suakhachhang/post/{id}', 'KhachHang\CustomerController@update')
            ->name('customer.update');
        Route::get('xoakhachhang/{id}', 'KhachHang\CustomerController@destroy')
            ->name('customer.delete');
        Route::get('GetCustomer/{id}', 'KhachHang\CustomerController@show')
            ->name('customer.show');
        //Dịch vụ
        Route::get('/dich-vu', 'Dichvu\ServiceController@index')
            ->name('service')
            ->middleware(['permission:Xem dịch vụ']);
        Route::get('/them-dich-vu', 'Dichvu\ServiceController@create')
            ->name('service.add')
            ->middleware(['permission:Thêm dịch vụ']);
        Route::post('/them-dich-vu', 'Dichvu\ServiceController@store')
            ->name('service.store')
            ->middleware(['permission:Thêm dịch vụ']);
        Route::get('/edit_dichvu/{id}', 'Dichvu\ServiceController@edit')
            ->name('service.edit');
        Route::post('/edit_dichvu/{id}', 'Dichvu\ServiceController@update')
            ->name('service.update');
        Route::get('/delete_dichvu/{id}', 'Dichvu\ServiceController@destroy')
            ->name('service.delete');

        //ca tap
        Route::get('catap', 'Dichvu\HymnalController@index')
            ->name('hymnal.index')
            ->middleware(['permission:Xem ca tập']);

        Route::get('catap/search', 'Dichvu\HymnalController@search')
            ->name('hymnal.search');
        Route::get('themcatap', 'Dichvu\HymnalController@add')
            ->name('hymnal.add')
            ->middleware(['permission:Thêm ca tập']);
        Route::get('suacatap/{id}', 'Dichvu\HymnalController@edit')
            ->name('hymnal.edit');
        Route::post('catap/post', 'Dichvu\HymnalController@store')
            ->name('hymnal.store')
            ->middleware(['permission:Thêm ca tập']);
        Route::post('suacatap/post/{id}', 'Dichvu\HymnalController@update')
            ->name('hymnal.update');
        Route::get('xoacatap/{id}', 'Dichvu\HymnalController@destroy')
            ->name('hymnal.delete');
        //Pt
        Route::get('Pt', 'PT\PtController@index')
            ->name('pt.index')
            ->middleware(['permission:Xem pt']);

        Route::get('dangKyPt', 'PT\PtController@addPt')
            ->name('pt.add')
            ->middleware(['permission:Đăng ký pt']);
        Route::get('lich-day-pt', 'PT\PtController@teaching')
            ->name('pt.teaching')
            ->middleware(['permission:Lịch dạy pt']);
        Route::get('xep-lich-hoc/{id}', 'PT\PtController@addTrainingPt')
            ->name('pt.addTrainingPt')
            ->middleware(['permission:Lịch học cho học viên']);
        Route::get('lich-hoc-hoc-vien/{id}', 'PT\PtController@ptStudent')
            ->name('pt.ptStudent')
            ->middleware(['permission:Lịch học cho học viên']);

        Route::post('xep-lich-hoc/post/{id}', 'PT\PtController@storeTrainingPt')
            ->name('pt.storeTrainingPt');
        Route::get('cap-nhat-lich-hoc/{id}', 'PT\PtController@editTrainingPt')
            ->name('pt.editTrainingPt');
        Route::post('cap-nhat-lich-hoc/post/{id}', 'PT\PtController@updateTrainingPt')
            ->name('pt.updateTrainingPt');
        Route::get('xoa-lich-hoc/{id}', 'PT\PtController@destroyTrainingPt')
            ->name('pt.destroyTrainingPt');
        //pt-level
        Route::get('goi-cuoc', 'KhachHang\PackageController@index')
            ->name('package.index')
            ->middleware(['permission:Xem gói cước']);
        Route::get('them-goi-cuoc', 'KhachHang\PackageController@create')
            ->name('package.create')
            ->middleware(['permission:Thêm gói cước']);

        Route::post('them-goi-cuoc', 'KhachHang\PackageController@add')
            ->name('package.add')
            ->middleware(['permission:Thêm gói cước']);

        Route::get('sua-goi-cuoc/{id}', 'KhachHang\PackageController@edit')
            ->name('package.edit');

        Route::post('sua-goi-cuoc/{id}', 'KhachHang\PackageController@update')
            ->name('package.edit');

        Route::get('xoa-goi-cuoc/{id}', 'KhachHang\PackageController@delete')
            ->name('package.delete');


        //=========================Sản phẩm==================//
        //san pham
        Route::get('/san-pham', 'Sanpham\ProductController@index')
            ->name('listproduct')
            ->middleware(['permission:Xem sản phẩm']);
        Route::get('/them-san-pham', 'Sanpham\ProductController@create')
            ->name('product.add')
            ->middleware(['permission:Thêm sản phẩm']);
        Route::post('/them-san-pham/post', 'Sanpham\ProductController@store')
            ->name('product.store')
            ->middleware(['permission:Thêm sản phẩm']);
        Route::get('/sua-san-pham/{id}', 'Sanpham\ProductController@edit')
            ->name('product.edit');
        Route::post('/sua-san-pham/post/{id}', 'Sanpham\ProductController@update')
            ->name('product.update');
        Route::get('/san-pham-xoa/{id}', 'Sanpham\ProductController@destroy')
            ->name('product.delete');
        Route::get('/show_san_pham', 'Sanpham\ProductController@show')
            ->name('product.sanpham_ban');
        Route::get('/addCart/{id}', 'Sanpham\ProductController@addCart')
            ->name('product.AddCart');
        Route::get('/show_san_pham/deleteCart/{id}', 'Sanpham\ProductController@DeleteCart')
            ->name('product.deleteCart_sp');
        Route::get('/show_san_pham/update', 'Sanpham\ProductController@UpdateCart')->name('product.update_sp');

        //doanh thu
        Route::get('/doanh-thu', 'Sanpham\CartController@index')
            ->name('listRevenue')
            ->middleware(['permission:Xem doanh thu']);
        Route::get('/doanh-thu-add', 'Sanpham\CartController@create')
            ->name('revenue.add')
            ->middleware(['permission:Thêm doanh thu']);
        Route::post('/doanh-thu-add/post', 'Sanpham\CartController@store')
            ->name('revenue.store')
            ->middleware(['permission:Thêm doanh thu']);

        //loai san pham
        Route::get('/loai-san-pham', 'Sanpham\CategoryController@index')
            ->name('listcategory')
            ->middleware(['permission:Xem danh mục sản phẩm']);
        Route::get('/them-loai-san-pham', 'Sanpham\CategoryController@create')
            ->name('category.add')
            ->middleware(['permission:Thêm danh mục sản phẩm']);
        Route::post('/them-loai-san-pham/post', 'Sanpham\CategoryController@store')
            ->name('category.store')
            ->middleware(['permission:Thêm danh mục sản phẩm']);
        Route::get('/sua-loai-san-pham/{id}', 'Sanpham\CategoryController@edit')
            ->name('category.edit');
        Route::post('/sua-loai-san-pham/post/{id}', 'Sanpham\CategoryController@update')
            ->name('category.update');
        Route::get('/loai-san-pham-xoa/{id}', 'Sanpham\CategoryController@destroy')
            ->name('category.delete');
        //danh sach bai viet

        Route::get('/danh-muc-bai-viet', 'Sanpham\CatePostController@index')
            ->name('listcate_posts')
                      ->middleware(['permission:Xem danh mục bài viết']);
        Route::get('/them-danh-muc-bai-viet', 'Sanpham\CatePostController@create')
            ->name('cate_posts.add')
                      ->middleware(['permission:Thêm danh mục bài viết']);
        Route::post('/them-danh-muc-bai-viet/post', 'Sanpham\CatePostController@store')
            ->name('cate_posts.store')
                      ->middleware(['permission:Thêm danh mục bài viết']);
        Route::get('/sua-danh-muc-bai-viet/{id}', 'Sanpham\CatePostController@edit')
            ->name('cate_posts.edit');
        Route::post('/sua-danh-muc-bai-viet/post/{id}', 'Sanpham\CatePostController@update')
            ->name('cate_posts.update');

        Route::get('/danh-muc-bai-viet-xoa/{id}', 'Sanpham\CatePostController@destroy')

            ->name('cate_posts.delete');

        //bai viet
        Route::get('/bai-viet', 'Sanpham\PostsController@index')
            ->name('listposts')
            ->middleware(['permission:Xem bài viết']);
        Route::get('/them-bai-viet', 'Sanpham\PostsController@create')
            ->name('posts.add')
            ->middleware(['permission:Thêm bài viết']);
        Route::post('/them-bai-viet/post', 'Sanpham\PostsController@store')
            ->name('posts.store')
            ->middleware(['permission:Thêm bài viết']);
        Route::get('/sua-bai-viet/{id}', 'Sanpham\PostsController@edit')
            ->name('posts.edit');
        Route::post('/sua-bai-viet/post/{id}', 'Sanpham\PostsController@update')
            ->name('posts.update');
        Route::get('/bai-viet-xoa/{id}', 'Sanpham\PostsController@destroy')
            ->name('posts.delete');
        Route::get('/show_san_pham/{id}', 'Sanpham\PostsController@show')
            ->name('posts.sanpham_ban');
        Route::get('/bai-viet-all/{id}', 'Sanpham\PostsController@delete')
            ->name('posts.xoa');

        //Pt-program
        Route::get('/chuong-trinh-PT', 'PT\PtProgramController@index')
            ->name('ptProgram.index')
            ->middleware(['permission:Xem chương trình PT']);

        Route::get('/them-chuong-trinh-PT', 'PT\PtProgramController@add')
            ->name('ptProgram.add')
            ->middleware(['permission:Thêm chương trình PT']);
        Route::post('/them-chuong-trinh-PT', 'PT\PtProgramController@store')
            ->name('ptProgram.store')
            ->middleware(['permission:Thêm chương trình PT']);
        Route::get('/sua-chuong-trinh-PT/{id}', 'PT\PtProgramController@edit')
            ->name('ptProgram.edit');
        Route::post('/cap-nhat-chuong-trinh-PT/{id}', 'PT\PtProgramController@update')
            ->name('ptProgram.update');
        Route::get('/xoa-chuong-trinh-PT/{id}', 'PT\PtProgramController@destroy')
            ->name('ptProgram.delete');

        Route::get('getPackage/{id}', 'PT\PtProgramController@getPackage')
            ->name('ptProgram.getPacket');
        Route::get('/lich-day', 'PT\PtProgramController@training')
            ->name('ptProgram.training')
            ->middleware(['permission:Xem lịch dạy']);
        Route::get('/thong-tin-pt', 'PT\PtProgramController@profilePt')
            ->name('ptProgram.profilePt')
            ->middleware(['permission:Thông tin PT']);

        //tài khoản khách hàng
        Route::get('/tai-khoan-khach', 'CustomerAccount\CustomerAccountController@index')
            ->name('customer_account')
            ->middleware(['permission:Xem tài khoản khách hàng']);
        Route::get('/them-tai-khoan-khach/', 'CustomerAccount\CustomerAccountController@create')
            ->name('customer_account.add')
            ->middleware(['permission:Thêm tài khoản khách hàng']);
        Route::post('/them-tai-khoan-khach', 'CustomerAccount\CustomerAccountController@store')
            ->name('customer_account.add')
            ->middleware(['permission:Thêm tài khoản khách hàng']);
        Route::get('/sua-tai-khoan-khach/{id}', 'CustomerAccount\CustomerAccountController@edit')
            ->name('customer_account.edit');
        Route::post('/sua-khoan-khach/{id}', 'CustomerAccount\CustomerAccountController@update')
            ->name('customer_accounts.edit');
        Route::get('/xoa-tai-khoan-khach/{id}', 'CustomerAccount\CustomerAccountController@destroy')
            ->name('customer_account.delete');
        Route::get('/search-khoan-khach/search', 'CustomerAccount\CustomerAccountController@search')
            ->name('customer_account.search');
        //liên hệ
        Route::get('/lien-he-admin', 'Admin\AdminController@contact')
            ->name('contact.admin')
        ->middleware(['permission:Xem thông tin liên hệ']);
        Route::get('/xóa-lien-he/{id}', 'Admin\AdminController@deleteContact')
            ->name('contact.delete');
        //-quan lý danh sách của khách đăng kí form
        Route::get('/danh-sach-dang-ki', 'Admin\AdminController@listForm')
            ->name('listForm')
            ->middleware(['permission:Xem thông tin đăng ký']);
        Route::get('/xoa-danh-sach-dang-ki/{id}', 'Admin\AdminController@deleteListForm')
            ->name('listForm.delete');
    });
});