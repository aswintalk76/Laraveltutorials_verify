<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});
Route::post('/form_submit',[AjaxController::class,'form_submit']);