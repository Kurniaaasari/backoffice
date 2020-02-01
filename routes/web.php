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
//route Admin
Route::get('/', function () {
    return view('welcome');});
Route::get('/admin', 'AdminController@index');
Route::get('/home', 'HomeController@index')->name('home');
//route sidebar
Route::resource('product','ProductController');
Route::resource('customer','CustomerController');
Route::resource('order','OrderController');
Route::resource('payment','PaymentController');
Route::get('/search','CustomerController@search');
Auth::routes();
Route::get('/wishlist','WishlistController@index');
Route::resource('address','AddressController');
<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('view-data', 'AuthorizationController@viewData');

Route::get('create-data', 'AuthorizationController@createData');

Route::get('edit-data', 'AuthorizationController@editData');

Route::get('update-data', 'AuthorizationController@updateData');

Route::get('delete-data', 'AuthorizationController@deleteData');
=======
Auth::routes();


>>>>>>> master
