<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/pagination', [EmployeeController::class, 'getData']);
Route::get('/convert-to-json', function () {
    return App\Employee::paginate(5);
});