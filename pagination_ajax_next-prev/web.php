<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/pagination', [PaginationController::class,'index']);
Route::post('pagination/fetch', [PaginationController::class,'fetch'])->name('pagination.fetch');
