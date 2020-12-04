<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/details', 'DetailController@index')->name('details');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'SuccessController@index')->name('success');
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

// dashboard
Route::get('/dashboard', 'Admin\DashboardController@index')
  ->name('dashboard');

// my product
Route::get('/dashboard/product', 'Admin\DashboardProductController@index')
  ->name('dashboard-product');
Route::get('/dashboard/create-product', 'Admin\DashboardProductController@create')
  ->name('create-product');
Route::get('/dashboard/product-details', 'Admin\DashboardProductController@show')
  ->name('details-product');

// transaction
Route::get('/dashboard/transactions', 'Admin\DashboardTransactionController@index')
  ->name('dashboard-transactions');
Route::get('/dashboard/transaction-details', 'Admin\DashboardTransactionController@details')
  ->name('dashboard-transactions-details');

// store settings and account setting
Route::get('/dashboard/store-settings', 'Admin\DashboardSettingController@store')
  ->name('store-settings');
Route::get('/dashboard/account-settings', 'Admin\DashboardSettingController@account')
  ->name('account-settings');


Auth::routes();
