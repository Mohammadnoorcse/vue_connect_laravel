<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('contacts', [ContactController::class, 'contacts']);
Route::post('save_contact',[ContactController::class,'saveContact']);