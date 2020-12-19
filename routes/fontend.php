<?php
use Illuminate\Support\Facades\Route;
Route::get('/','FontendController@index')->name('fontend');
//lien he
Route::get('/lien-he', 'FontendController@contact')->name('contact');
Route::post('/lien-he', 'FontendController@addContact')->name('contact.add');
//blog
Route::get('/blogs', 'FontendController@blogs')->name('blogs');
Route::get('/detailblogs', 'FontendController@detailblog')->name('detailblog');
//dang ki thanh vien
Route::get('/dang-ki-thanh-vien', 'FontendController@newmember')->name('newmember');
Route::post('/dang-ki-thanh-vien', 'FontendController@addMember')->name('newmember.add');
//dịch vụ
Route::get('/dichvu', 'FontendController@service')->name('layout.service');