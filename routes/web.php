<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','EmployeesController@index')->name('employees.index');
Route::get('/employees/edit/{employees}', 'EmployeesController@editEmployeesForm')->name('employees.edit');
Route::patch('/employees/update/{id}', 'EmployeesController@updateEmployeesForm')->name('employees.update');
Route::delete('/employees/{id}', 'EmployeesController@deleteEmployees')->name('employees.delete');
