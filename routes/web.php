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
Route::post('/signout', 'HomeController@getLogout')->name('signout');
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
    Route::patch('/meals/update','Admin\MealController@update');
    Route::post('/meals','Admin\MealController@store');
    Route::get('/meals/delete/{id}','Admin\MealController@destroy');
    Route::get('/rooms','Admin\RoomController@index');
    Route::patch('/rooms/update','Admin\RoomController@update');
    Route::get('/rooms/delete/{id}','Admin\RoomController@destroy');
    Route::get('/booked-rooms','Admin\BookingController@rooms');
    Route::post('/release','Admin\BookingController@release');
    Route::get('/ordered-meals','Admin\BookingController@meals');
    Route::post('/rooms','Admin\RoomController@store');
    Route::get('/customers','Admin\IndexController@customers');
    Route::post('/customers','Admin\IndexController@generate_report');
    Route::get('/customers/delete/{id}','Admin\IndexController@delete_customer');
    Route::get('/messages','Admin\IndexController@messages');
    Route::get('/messages/delete/{id}','Admin\IndexController@delete_message');
  
});
