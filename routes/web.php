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

// Route::get('/', function () {
//     return view('welcome');
// });

//Simple Views
Route::view('/', 'welcome');
Route::view('contact', 'contact');

//Passing data to views - syntax: CONTROLLER@FUNCTION
Route::get('customers', 'CustomersController@list');