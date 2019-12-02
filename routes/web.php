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

Route::get('/', 'PagesController@home');
Route::get('/shop/{category?}', 'PagesController@shop');
Route::get('/shop-list/{category?}', 'PagesController@shopList');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');
Route::get('/cart', 'PagesController@cart');
Route::get('/checkout', 'PagesController@checkout');
Route::get('order-complete', 'PagesController@orderComplete');
Route::get('product-page/{product_id}', 'PagesController@productPage');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
