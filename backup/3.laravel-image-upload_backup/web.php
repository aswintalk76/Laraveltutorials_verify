<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUpload;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/image-upload', [ImageUpload::class, 'createForm']);
Route::post('/image-upload', [ImageUpload::class, 'fileUpload'])->name('imageUpload');
