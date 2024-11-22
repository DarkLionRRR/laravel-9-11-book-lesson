<?php

use App\Http\Controllers\BbsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BbsController::class, 'index'])->name('index');
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');
