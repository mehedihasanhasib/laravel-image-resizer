<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('image-resize', [ImageController::class, 'resizer'])
    ->name('resizer');
