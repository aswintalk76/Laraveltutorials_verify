<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminVendorController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('adminvendor',[AdminVendorController::class,'index']);
    Route::get('show_adminvendor/show/{id}',[AdminVendorController::class,'show']);
    Route::get('manage_adminvendor',[AdminVendorController::class,'manage_adminvendor']);
    Route::get('manage_adminvendor_process',[AdminVendorController::class,'manage_adminvendor_process']);
    Route::get('manage_adminvendor/{id}',[AdminVendorController::class,'manage_adminvendor']);
    Route::post('manage_adminvendor_process',[AdminVendorController::class,'manage_adminvendor_process'])->name('adminvendor.manage_adminvendor_process');
    Route::get('adminvendor/delete/{id}',[AdminVendorController::class,'delete']);
    Route::get('adminvendor/status/{status}/{id}',[AdminVendorController::class,'status']);

    
