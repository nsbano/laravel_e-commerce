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

Auth::routes();

Route::get('/sportshoes', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/product', 'ProductController@index')->name('product.index');
Route::post('/products', 'ProductController@store')->name('product.store');
Route::get('/products/create', 'ProductsController@create')->name('product.create');

Route::get('/cart', function () {
  return view('cart');
})->name('cart');
Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');
Route::get('/user','UsersController@show')->name('user.profile')->middleware('auth');
Route::get('/user/config','UsersController@edit')->name('user.edit')->middleware('auth');
//Route::put('/user/{id}', 'userController@update')->name('user.update')-middleware('auth');

Route::get('/user','UsersController@show')->name('user.profile')->middleware('auth');
Route::get('/user/config','UsersController@edit')->name('user.edit')->middleware('auth');
//Route::put('/user/{id}', 'userController@update')->name('user.update')-middleware('auth');


Route::get('/home', 'HomeController@index')->name('home');
