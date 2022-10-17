<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

/************************  to get all employees  ****************************/

Route::get('/employees',[\App\Http\Controllers\EmployeesController::class ,'getEmployees'])->name('allEmployees');


/************************  to get employee based id  ****************************/

Route::get('/employees/{id}',[\App\Http\Controllers\EmployeesController::class ,'getEmployeeById'])->name('getEmployeeById');
