<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/view', [ProfileController::class, 'display'])->name('profile.view');
Route::get('/profile/create',[ProfileController::class,'create']);
Route::post('/profile/store',[ProfileController::class,'store']);
Route::get('/employe/{employe}/edit',[ProfileController::class,'edit'])->name('employe.edit');
Route::put('/employe/{employe}',[ProfileController::class,'update'])->name('employe.update');