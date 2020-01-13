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
Route::get('/about', 'PagesController@about');
Route::get('/single-blog/{postId}', 'PagesController@singleBlog');
Route::get('/blog/{category?}', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');
Route::get('/product-page/{productId}', 'PagesController@productPage');
Route::get('/cart', 'PagesController@cart')->middleware('auth');
Route::get('/payment', 'PagesController@payment')->middleware('auth');
Route::get('/account', 'PagesController@account')->middleware('auth');
Route::get('/wishlist', 'PagesController@wishList')->middleware('auth');

Route::get('/checkout', 'CheckoutController@shipping')->middleware('auth');
Route::post('/checkout', 'CheckoutController@orderOverview')->middleware('auth');
Route::get('/payment', 'CheckoutController@payment')->middleware('auth');
Route::post('/order-complete', 'CheckoutController@orderComplete')->middleware('auth');

Route::resource('carts', 'CartController')->only(['update'])->middleware('auth');
Route::resource('cart-items', 'CartItemController')->middleware('auth');
Route::resource('wish-items', 'WishItemController')->middleware('auth');
Route::resource('addresses', 'AddressController')->middleware('auth');

Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

