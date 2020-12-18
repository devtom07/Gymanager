<?php
use Illuminate\Support\Facades\Route;
Route::get('/','FontendController@index')->name('fontend');
Route::get('/lien-he', 'FontendController@contact')->name('contact');