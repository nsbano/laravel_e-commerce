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

Route::get('/products', 'ProductsController@index')->name('products.index');
Route::post('/products', 'ProductsController@store')->name('products.store');
Route::get('/products/create', 'ProductsController@create')->name('products.create');
