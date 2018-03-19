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

Route::get('/','HomeController@index');
Route::post('/','HomeController@bookRoom');
Route::get('/meals','HomeController@meals');
Route::post('/meals','HomeController@bookMeal');
Route::get('/signin','HomeController@login')->name('login');
Route::post('/signin','HomeController@signin');
Route::get('/signout', 'HomeController@getLogout')->name('signout');
Route::get('/register', 'HomeController@register');
Route::post('/register', 'HomeController@postRegister');
Route::get('/customer', 'HomeController@customer');
Route::post('/customer', 'HomeController@storeCustomer');
Route::get('/message', 'HomeController@message');
Route::post('/message', 'HomeController@storeMessage');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/','Admin\IndexController@index');
   // Route::get('room', 'Hostel\RoomController@index');
    Route::get('/meals','Admin\MealController@index');
    Route::post('/meals','Admin\MealController@store');
    Route::get('/rooms','Admin\RoomController@index');
    Route::get('/booked-rooms','Admin\BookingController@rooms');
    Route::post('/release','Admin\BookingController@release');
    Route::get('/ordered-meals','Admin\BookingController@meals');
    Route::post('/rooms','Admin\RoomController@store');
    Route::get('/customers','Admin\IndexController@customers');
    Route::get('/messages','Admin\IndexController@messages');
  
});
