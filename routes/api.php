<?php

use App\Http\Controllers\GgController;
use Illuminate\Support\Facades\Route;
use Spatie\ResponseCache\Middlewares\CacheResponse;

Route::prefix('gg')
    ->controller(GgController::class)
    ->middleware(CacheResponse::class)
    ->group(function () {
        Route::get('/version', 'getVersion');
    });
