<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminVendorController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\TestController;

use App\Http\Controllers\CompanyController;
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
Route::delete('/addcompany/{id}', 'CompanyController@destroy')->name('company.destroy');

// Route::get('/', [TestController::class,'index']);
// Route::resource('image','ImageController');
// Route::get('/pagination', [PaginationController::class,'index']);

// Route::post('pagination/fetch', [PaginationController::class,'fetch'])->name('pagination.fetch');

// Route::get('adminvendor',[AdminVendorController::class,'index']);
//     Route::get('show_adminvendor/show/{id}',[AdminVendorController::class,'show']);
//     Route::get('manage_adminvendor',[AdminVendorController::class,'manage_adminvendor']);
//     Route::get('manage_adminvendor_process',[AdminVendorController::class,'manage_adminvendor_process']);
//     Route::get('manage_adminvendor/{id}',[AdminVendorController::class,'manage_adminvendor']);
//     Route::post('manage_adminvendor_process',[AdminVendorController::class,'manage_adminvendor_process'])->name('adminvendor.manage_adminvendor_process');
//     Route::get('adminvendor/delete/{id}',[AdminVendorController::class,'delete']);
//     Route::get('adminvendor/status/{status}/{id}',[AdminVendorController::class,'status']);

    
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[StudentController::class,'index']) ;
// Route::get('/edit/{id}',[StudentController::class,'edit']) ;
// Route::get('/show/{id}',[StudentController::class,'show']) ;
// Route::get('/create',[StudentController::class,'create']) ;
// Route::post('/store',[StudentController::class,'store']) ;
// Route::post('/update/{id}',[StudentController::class,'update']) ;

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
