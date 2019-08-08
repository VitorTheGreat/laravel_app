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

//RESTFUL CONTROLLERS - SEE LARAVEL DOCMENTATION
//Passing data to views (listing) - syntax: CONTROLLER@FUNCTION
// Route::get('customers', 'CustomersController@index');
// Route::get('customers/create', 'CustomersController@create');
// //To insert data to date base we use ROUTE::POST
// Route::post('customers', 'CustomersController@store');
// //Show method by customer ID
// Route::get('customers/{customer}', 'CustomersController@show');
// //Restful method of updating
// Route::get('customers/{customer}/edit', 'CustomersController@edit'); //view for editing
// Route::patch('customers/{customer}', 'CustomersController@update'); //saving data comming from view edit
// Route::delete('customers/{customer}', 'CustomersController@destroy'); //deleting data comming from view

//To use this way we do have to follow the Laravel convention (methods of CRUD, restful controllers)
//In order to not use all the routes above, Laravel do it for us
Route::resource('customers', 'CustomersController');
