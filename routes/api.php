<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware('example')->get('/', [ExampleController::class, 'indexApi']);
Route::get('/', [ExampleController::class, 'noAcces'])->name('no-acces');
