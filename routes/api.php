<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [ExampleController::class, 'noAcces'])->name('no-acces');

Route::middleware(['example', 'auth', 'admin'])->group(function(){
    Route::get('/', [ExampleController::class, 'indexApi']);
    Route::get('/', [ExampleController::class, 'noAdmin'])->withoutMiddleware('admin');
    // Route 2
    // Route 3
    // ETC
});
