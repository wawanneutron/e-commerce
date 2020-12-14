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
Route::get('/dashboard/product-details', 'User\DashboardProductController@show')
  ->name('details-product');

// transaction
Route::get('/dashboard/transactions', 'User\DashboardTransactionController@index')
  ->name('dashboard-transactions');
Route::get('/dashboard/transaction-details', 'User\DashboardTransactionController@details')
  ->name('dashboard-transactions-details');

// store settings and account setting
Route::get('/dashboard/store-settings', 'User\DashboardSettingController@store')
  ->name('store-settings');
Route::get('/dashboard/account-settings', 'User\DashboardSettingController@account')
  ->name('account-settings');

// Route Admin
Route::prefix('admin')
  ->namespace('Admin')
  ->group(function () {
    Route::get('/dashboard', 'DashboardController@index')
      ->name('admin-dashboard');
    Route::resource('/dashboard-category', 'CategoryController');
    Route::resource('/account-user', 'UserController');
    Route::resource('/dashboard-products', 'ProductController');
    Route::resource('/dashboard-gallery', 'GalleryController');
  });

Auth::routes();
