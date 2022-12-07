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
    $router->resource('customers', CustomerController::class);
    $router->resource('employees', EmployeeController::class);
    $router->resource('nominees', NomineeController::class);
    $router->resource('addresses', AddressController::class);
    $router->resource('managers', ManagerController::class);
    $router->resource('departments', DepartmentController::class);
    $router->resource('employees', EmployeeController::class);
    $router->resource('user_informations', UserinformationController::class);
});
