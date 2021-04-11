<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//Like route
Route::get('post',[PostController::class,'index']);
Route::get('post/{slug?}',[PostController::class,'show'])->name('post');
Route::post('/like',[PostController::class,'getlike']);
Route::post('/like/{id}',[PostController::class,'like']);