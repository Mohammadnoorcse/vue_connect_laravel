<?php

// use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// api
use App\Http\Controllers\ContactController;

// Route::get('contacts', [ContactController::class, 'contacts']);

