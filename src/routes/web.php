<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'RickyCA\HelloWorld\Http\Controllers'], function () {
    Route::get('hello-world', 'HelloWorldController@index');
});
