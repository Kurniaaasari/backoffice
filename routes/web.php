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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index');
Route::resource('product','ProductController');
Route::resource('customer','CustomerController');
Auth::routes();
Route::resource('wishlist','WishlistController');
Route::resource('address','AddressController');
Route::resource('order','OrderController');
Route::resource('payment','PaymentController');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('view-data', 'AuthorizationController@viewData');

Route::get('create-data', 'AuthorizationController@createData');

Route::get('edit-data', 'AuthorizationController@editData');

Route::get('update-data', 'AuthorizationController@updateData');

Route::get('delete-data', 'AuthorizationController@deleteData');

Route::post('product/search', 'ProductController@search');

Route::post('customer/search', 'CustomerController@search');

Route::post('order/search', 'OrderController@search');