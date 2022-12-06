<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AvatarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\NomineeController;
use App\Http\Controllers\UserInformationController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

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
    Route::resource('/nominees', NomineeController::class);
    // Route::get('/crud', 'Admin\Dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');