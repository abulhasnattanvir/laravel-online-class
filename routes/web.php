<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', [ProfileController::class, 'display']);
Route::get('/profile/create',[ProfileController::class,'create']);
Route::post('/profile/store',[ProfileController::class,'store']);