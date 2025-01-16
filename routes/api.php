<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Public API routes
Route::get('/data', [HomeController::class, 'index']); 


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
