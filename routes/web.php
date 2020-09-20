<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail', 'DetailController@index')->name('detail');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/checkout/success', 'checkoutController@success')->name('success');


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {

        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        // all route for travelpackage
        Route::resource('travel-package', 'TravelPackageController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'TransactionController');
    });

Auth::routes(['verify' => true]);
