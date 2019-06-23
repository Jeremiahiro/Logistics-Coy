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

Route::get('/', 'PagesController@index')->name('home');  
Route::get('/blog', 'PagesController@blog')->name('blog');  
Route::get('/about', 'PagesController@about')->name('about');  
Route::get('/terms', 'PagesController@terms')->name('terms');  
Route::get('/gallery', 'PagesController@gallery')->name('gallery');  
Route::get('/privacy', 'PagesController@privacy')->name('privacy');  
Route::get('/contact', 'PagesController@contact')->name('contact');  
Route::get('/study_abroad', 'ServiceController@study')->name('study_abroad'); 
Route::get('/flight_booking', 'ServiceController@flight')->name('flight_booking');  
Route::get('/visa_application', 'ServiceController@visa')->name('visa_application');  
Route::get('/hotel_reservation', 'ServiceController@hotel')->name('hotel_reservation');  
Route::get('/delivery_service', 'ServiceController@delivery')->name('delivery_service');  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');