<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('homepage');  
Route::get('/blog', 'PagesController@blog')->name('blog');  
Route::get('/about', 'PagesController@about')->name('about');  
Route::get('/terms', 'PagesController@terms')->name('terms');  
Route::get('/gallery', 'PagesController@gallery')->name('gallery');  
Route::get('/privacy', 'PagesController@privacy')->name('privacy');  
Route::get('/contact', 'PagesController@contact')->name('contact');  
Route::get('/study', 'ServiceController@study')->name('study'); 
Route::get('/flight', 'ServiceController@flight')->name('flight');  
Route::get('/visa', 'ServiceController@visa')->name('visa');  
Route::get('/hotel', 'ServiceController@hotel')->name('hotel');  
Route::get('/delivery', 'ServiceController@delivery')->name('delivery');  
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');