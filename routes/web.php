<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

Route::withoutMiddleware([VerifyCsrfToken::class])->group(function () {
    Route::prefix('api')->group(function () {
        Route::post('/login', 'Api\AuthController@store');
    });
});
