<?php

/* Pages */
Route::get('/', 'PagesController@index')->name('home');
Route::get('/more', 'PagesController@more')->name('more');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/mentions-legales', 'PagesController@mentions')->name('mentions');


/* Contacts */
Route::post('/contact', 'ContactsController@send')->name('sendMail');


/* Admin */
Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin');
Route::post('/admin', 'AdminController@search')->name('search');


/* Bitcoins */
Route::resource('bitcoins', 'BitcoinsController');
