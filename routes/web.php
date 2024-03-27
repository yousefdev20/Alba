<?php

use Yousef\Alba\Http\Controllers\AppController;
use Yousef\Alba\System\Core\Support\Routing\Route;

Route::name('1')->post('/post', [AppController::class, 'index']);
Route::name('2')->get('/second', [AppController::class, 'index']);
Route::name('3')->get('/third', [AppController::class, 'index']);
Route::name('4')->get('/fourth', [AppController::class, 'index']);
