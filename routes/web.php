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

Route::get('/product',  function () {
  return view('product');
})->name('product');
Route::get('/cart', function () {
  return view('cart');
})->name('cart');
Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');
Route::get('/register',  function () {
  return view('register');
})->name('register');
Route::get('/login',  function () {
  return view('login');
})->name('login');
Route::get('/discounts',  function () {
  return view('discounts');
})->name('discounts');
