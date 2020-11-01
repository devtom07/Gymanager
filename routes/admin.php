<?php 

Route::get('/dashdoard','AdminController@index')->name('dashboard');
Route::get('/customer','CustomerController@index')->name('customer');
Route::get('/customer/add','CustomerController@add')->name('customer.add');
Route::get('/authur','AuthurController@index')->name('authur');
?>