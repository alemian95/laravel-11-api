<?php

use Illuminate\Support\Facades\Route;


Route::get('/user', [ \App\Http\Controllers\Api\UserController::class, "index" ])->middleware([ 'auth:sanctum' ]);
Route::get('/settings', [ \App\Http\Controllers\Api\SettingsController::class, "index" ]);
Route::get('/settings/translations', [ \App\Http\Controllers\Api\SettingsController::class, "translations" ]);
