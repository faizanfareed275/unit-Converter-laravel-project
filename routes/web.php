<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\converterController;

Route::GET('/', [converterController::class, 'showForm']);
Route::POST('/index', [converterController::class, 'unitConversion'])->name('index.unit');

