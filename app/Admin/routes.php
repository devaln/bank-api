<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('account_types', AccountTypeController::class);
    $router->resource('addresses', AddressController::class);
    $router->resource('cards', CardController::class);
    $router->resource('customers', CustomerController::class);
    $router->resource('departments', DepartmentController::class);
    $router->resource('employees', EmployeeController::class);
    $router->resource('managers', ManagerController::class);
    $router->resource('nominees', NomineeController::class);
    $router->resource('salaries', SalaryController::class);
    $router->resource('senders', SenderController::class);
    // $router->resource('transaction_-details', TransactionDetailsController::class);
    $router->resource('transactions', TransactionController::class);
    $router->resource('user_informations', UserInformationController::class);
    $router->resource('users', UseraController::class);
});
