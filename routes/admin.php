<?php 

Route::get('/dashdoard','AdminController@index')->name('dashboard');
Route::get('/customer','CustomerController@index')->name('customer');
Route::get('/customer/add','CustomerController@add')->name('customer.add');
Route::get('/login','AuthurController@login')->name('login');
Route::get('/resetpass','AuthurController@resetpass')->name('resetpass');


//=========================Nhân viên==================//
Route::get('/nhanvien','Nhanvien\ListnhanvienController@index')->name('listnhanvien');
Route::get('/calamviec','Nhanvien\CalamviecController@index')->name('calamviec');
Route::get('/calamviecnhanvien','Nhanvien\CalamviecNhanVien@index')->name('calamviecnhanvien');