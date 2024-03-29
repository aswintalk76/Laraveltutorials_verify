<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/', [CrudController::class, 'index']);
Route::resource('todo', CrudController::class);