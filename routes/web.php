<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('quis' , 'HtmlCssJs\HomeController@quis');

Route::group(
    ['namespace' => 'AnzharEcommerce\Admin', 'prefix' => 'anzharecommerce/admin'],
    function () {
        Route::get('dashboard', 'DashboardController@index');
    }
);

Route::group(
    ['namespace' => 'PesonaMahameru\FrontEnd', 'prefix' => 'pesona-mahameru'],
    function () {
        Route::get('/', 'FrontEndController@index');
    }
);

Route::group(
    ['namespace' => 'TinggalJualan\FrontEnd', 'prefix' => 'tinggal-jualan'],
    function () {
        Route::get('/', 'FrontEndController@index');
        Route::get('/services', 'FrontEndController@service');
    }
);

Route::group(
    ['namespace' => 'Youthderma\FrontEnd', 'prefix' => 'youthderma'],
    function () {
        Route::get('/', 'FrontEndController@index');
    }
);
