<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\NomineeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserInformationController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NotificationController;


// Route::get('/', function () {
    //     return view('welcome');
    // });
    Auth::routes();

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['middleware' => ['auth']], function() {
        Route::view('/home', 'home');
        Route::view('/crud', 'crud');
        Route::resource('/customers', CustomerController::class);
        Route::resource('/employees', EmployeeController::class);
        Route::resource('/managers', ManagerController::class);
    Route::resource('/departments', DepartmentController::class);
    Route::resource('/userinformations', UserInformationController::class);
    Route::resource('/addresses', AddressController::class);
    Route::resource('/nominees', NomineeController::class);
    Route::resource('/transactions', TransactionController::class);
    Route::resource('/cards', CardController::class);
    // Route::resource('/transactions2', ['TransactionController::class', 'currentbalance']);
    Route::view('/newforms','newforms');
    // Route::view('/send','transactions.trans');

    Route::view('/index2','layouts.index2');
    Route::view('/privacy','layouts.privacy');
    Route::view('/project','layouts.project');
    Route::view('/terms','layouts.terms');

    Route::get('/export', [UserInformationController::class, 'export'])->name('userinformations.export');
    Route::post('/import', [UserInformationController::class, 'import'])->name('userinformations.import');
    Route::get('/sendmoney', [UserInformationController::class, 'sendmoney'])->name('userinformations.sendmoney');
    Route::get('/send-notification', [NotificationController::class, 'sendOfferNotification']);
});
