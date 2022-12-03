<?php

use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserInformationController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

// Route::view('/2', 'userinformation.create');
// Route::view('/3', 'userinformation.edit');
// Route::view('/4', 'userinformation.show');
// Route::view('/1', 'userinformation.index');
Route::view('/index2','layouts.index2');
Route::view('/privacy','layouts.privacy');
Route::view('/project','layouts.project');
Route::view('/terms','layouts.terms');

    Route::resource('/customers', CustomerController::class);
    Route::resource('/employees', EmployeeController::class);
    Route::resource('/managers', ManagerController::class);
    Route::resource('/departments', DepartmentController::class);
    Route::resource('/userinformations', UserInformationController::class);
    Route::resource('/addresses', AddressController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');