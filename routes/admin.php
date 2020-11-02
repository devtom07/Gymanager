<?php 

Route::get('/dashdoard','AdminController@index')->name('dashboard');
Route::get('/customer','CustomerController@index')->name('customer');
Route::get('/customer/add','CustomerController@add')->name('customer.add');
Route::get('/login','AuthurController@login')->name('login');
Route::get('/resetpass','AuthurController@resetpass')->name('resetpass');


//=========================Nhân viên==================//
//list nhân viên
Route::get('/nhanvien','Nhanvien\ListnhanvienController@index')->name('listnhanvien');
Route::get('/addnhanvien','Nhanvien\ListnhanvienController@create')->name('listnhanvien.add');
Route::get('/editnhanvien/{id}','Nhanvien\ListnhanvienController@edit')->name('listnhanvien.edit');
// Ca làm việc
Route::get('/calamviec','Nhanvien\CalamviecController@index')->name('calamviec');
Route::get('/addcalamviec','Nhanvien\CalamviecController@create')->name('calamviec.add');
//Ca làm việc nhân viên
Route::get('/calamviecnhanvien','Nhanvien\CalamviecNhanVien@index')->name('calamviecnhanvien');
Route::get('/addcalamviecnhanvien','Nhanvien\CalamviecNhanVien@create')->name('calamviecnhanvien.add');