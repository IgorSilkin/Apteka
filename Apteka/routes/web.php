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

Route::get('/categories/', 'CategoriesController@index');

Route::get('/category/{category}', 'CategoriesController@show');

Route::get('/contacts', 'ContactsController@index');

Route::get('/cart/', 'CartController@index');

Route::get('/about/', 'AppController@about');

Route::get('/cart/clear/', 'CartController@clear');

Auth::routes();

Route::post('/cart/addAjax/', 'CartController@addAjax');
Route::post('/cart/items_in_cart/', 'CartController@items_in_cart');

Route::post('/cart/delete/', 'CartController@deleteProduct');

Route::get('/cart/checkout/', 'CartController@checkout');

Route::get('/admin-panel/', 'AdminPanel@index');
Route::get('/admin-panel/categories', 'AdminPanel@categories');
Route::get('/admin-panel/products', 'AdminPanel@products');
Route::get('/admin-panel/posts', 'AdminPanel@posts');
Route::get('/admin-panel/orders', 'AdminPanel@orders');
Route::get('/admin-panel/users', 'AdminPanel@users');

Route::resource('admin-panel/categories', 'DashCategories');
Route::resource('admin-panel/posts', 'DashPosts');
Route::resource('admin-panel/products', 'DashProducts');
Route::resource('admin-panel/users', 'DashUsers');
Route::resource('admin-panel/orders', 'DashOrders');