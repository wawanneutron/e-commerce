<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', 'HomeController@index')
  ->name('home');

Route::get('/categories', 'CategoryController@index')
  ->name('categories');
Route::get('/categories/{id}', 'CategoryController@detail')
  ->name('categories-detail');

Route::get('/details/{slug}', 'DetailController@index')
  ->name('details');
Route::post('/details/{id}', 'DetailController@add')
  ->name('detail-add');

// checkout midtrans
Route::post('/checkout', 'CheckoutController@process')
  ->name('checkout');
Route::post('/checkout/callback', 'CheckoutController@callback')
  ->name('midtrans-callback');


Route::group(['middleware' => ['auth']], function () {
  Route::get('/cart', 'CartController@index')
    ->name('cart');
  Route::delete('/cart/{id}', 'CartController@delete')
    ->name('cart-delete');

  Route::get('/success', 'CartController@success')
    ->name('success');
  Route::get('/register/success', 'Auth\RegisterController@success')
    ->name('register-success');

  // dashboard
  Route::get('/dashboard', 'User\DashboardController@index')
    ->name('dashboard');

  // my product
  Route::get('/dashboard/product', 'User\DashboardProductController@index')
    ->name('dashboard-product');
  Route::get('/dashboard/create-product', 'User\DashboardProductController@create')
    ->name('create-product');
  Route::post('/dashboard/store-product', 'User\DashboardProductController@store')
    ->name('store-product');
  // details product and update product
  Route::get('/dashboard/product-details/{id}', 'User\DashboardProductController@show')
    ->name('details-product');
  Route::post('/dashboard/product-update/{id}', 'User\DashboardProductController@update')
    ->name('update-product');

  Route::get('/dashboard/product-gallery/{id}', 'User\DashboardProductController@destroy')
    ->name('destroy-product');
  Route::post('/dashboard/upload-gallery/{id}', 'User\DashboardProductController@uploadGallery')
    ->name('upload-gallery-product');

  // transaction
  Route::get('/dashboard/transactions', 'User\DashboardTransactionController@index')
    ->name('dashboard-transactions');
  Route::get('/dashboard/transaction-details/{id}', 'User\DashboardTransactionController@details')
    ->name('dashboard-transactions-details');

  // store settings and account setting
  Route::get('/dashboard/store-settings', 'User\DashboardSettingController@store')
    ->name('store-settings');
  Route::get('/dashboard/account-settings', 'User\DashboardSettingController@account')
    ->name('account-settings');
});


// Route Admin
Route::prefix('admin')
  ->namespace('Admin')
  ->middleware(['auth', 'admin'])
  ->group(function () {
    Route::get('/dashboard', 'DashboardController@index')
      ->name('admin-dashboard');
    Route::resource('/dashboard-category', 'CategoryController');
    Route::resource('/account-user', 'UserController');
    Route::resource('/dashboard-products', 'ProductController');
    Route::resource('/dashboard-gallery', 'GalleryController');
  });

Auth::routes();
