<?php

use Yousef\Alba\System\Core\Route\Route;
use Yousef\Alba\Http\Controllers\AppController;

Route::post('/post', [AppController::class, 'index']);
Route::get('/second', [AppController::class, 'index']);
Route::get('/third', [AppController::class, 'index']);
Route::get('/fourth', [AppController::class, 'index']);
