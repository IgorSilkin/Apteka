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

Route::get('/', 'AppController@index');

Route::get('/product/{id}', 'GoodsController@show');

Route::get('/category/{category}', 'CategoriesController@show');

Route::get('/contacts', 'ContactsController@index');

Route::get('/cart/', 'CartController@index');

Route::get('/cart/clear/', 'CartController@clear');

Route::get('/admin/', 'AppController@admin');

Auth::routes();

Route::post('/cart/addAjax/', 'CartController@addAjax');

Route::post('/cart/delete/', 'CartController@deleteProduct');