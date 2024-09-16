<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'under-construction'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
