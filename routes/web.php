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
Route::group(['prefix' => 'user'], function () {
    Route::get('/{name?}', [UserController::class, 'showName']);
    Route::post('/store', [UserController::class, 'store']);
});

use App\Http\Controllers\TaskController;
Route::group(['prefix' => 'task'], function () {
    Route::post('/store', [TaskController::class, 'store']);
});
