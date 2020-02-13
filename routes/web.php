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

//route Sidebar
Route::get('customer/address/{id_customer}','CustomerController@address');

Route::get('order/detail/{id_order}','OrderController@detail');

Route::get('/wishlist','WishlistController@index');

Route::resource('product','ProductController');

Route::resource('customer','CustomerController');

Route::resource('order','OrderController');

Route::resource('payment','PaymentController');

Route::resource('users','UsersController');

Route::resource('address','AddressController');

Route::resource('detail','DetailController');

Auth::routes();

// Root Search
Route::get('/firebase','FirebaseController@index');

Route::post('product/search', 'ProductController@search');

Route::post('customer/search', 'CustomerController@search');

Route::post('order/search', 'OrderController@search');

Route::post('payment/search', 'PaymentController@search');

Route::post('wishlist/search', 'WishlistController@search');

Route::post('address/search', 'AddressController@search');

Route::post('users/search', 'UsersController@search');

Route::get('/search','CustomerController@search');

