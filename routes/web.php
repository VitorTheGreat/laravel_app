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
Route::view('/', 'home');
Route::view('contact', 'contact');

//Passing data to views (listing) - syntax: CONTROLLER@FUNCTION
Route::get('customers', 'CustomersController@list');
//To insert data to date base we use ROUTE::POST
Route::post('customers', 'CustomersController@create');
