<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [EmployeeController::class, 'ShowEmployees'])->name('home');
Route::get('/Employee-Information/{id}', [EmployeeController::class, 'EmployeeInfo'])->name('emp.info');
Route::post('/Add', [EmployeeController::class, 'addEmployee'])->name('emp.insert');
Route::post('/UpdateEmployee/{id}', [EmployeeController::class, 'UpdateEmployee'])->name('emp.update');

Route::get('/Updatepage/{id}', [EmployeeController::class, 'updatePage'])->name('emp.update.page');
Route::get('/DeleteEmployee/{id}', [EmployeeController::class, 'delEmployee'])->name('emp.delete');
Route::get('/DeleteAllEmployee}', [EmployeeController::class, 'delAllEmployee'])->name('emp.delete.all');

Route::get('/registration', function () {
    return view('employee-form');
})->name('emp.form');


Route::get('/AddEmployee', function () {
    return view('employee-form');
})->name('emp.add');
