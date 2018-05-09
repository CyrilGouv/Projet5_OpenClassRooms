<?php

/* PagesController */
Route::get('/', 'PagesController@index')->name('home');
Route::get('/more', 'PagesController@more')->name('more');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/mentions-legales', 'PagesController@mentions')->name('mentions');