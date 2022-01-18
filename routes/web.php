<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(
    ['namespace' => 'AnzharEcommerce\Admin', 'prefix' => 'admin-anzharecommerce'],
    function () {
        Route::get('dashboard', 'DashboardController@index');
    }
);
