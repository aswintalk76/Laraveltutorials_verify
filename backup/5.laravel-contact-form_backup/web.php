<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');