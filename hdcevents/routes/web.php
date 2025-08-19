<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/home', [EventController::class, 'create']);

Route::get('/sobre', function () {
    return view('sobre');
});