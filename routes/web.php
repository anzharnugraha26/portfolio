<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(
    ['namespace' => 'AnzharEcommerce\Admin', 'prefix' => 'anzharecommerce/admin'],
    function () {
        Route::get('dashboard', 'DashboardController@index');
    }
);
