<?php

use App\Http\Controllers\WelcomeController;
Route::get('/', 'WelcomeController@show');

use App\Http\Controllers\test\FirstTestController;
use App\Http\Controllers\test\SecondTestController;
Route::group(['prefix' => 'test'], function () {
    Route::get('/1', [FirstTestController::class, 'index']);
    Route::get('/2', [SecondTestController::class, 'index']);
});

use App\Http\Controllers\UserController;
Route::get('/user/{name?}', [UserController::class, 'showName']);
