<?php 

Route::get('/','AdminController@index')->name('dashboard');
Route::get('/Customer','CustomerController@index')->name('customer');
Route::get('/Customer/add','CustomerController@add')->name('customer.add');
?>