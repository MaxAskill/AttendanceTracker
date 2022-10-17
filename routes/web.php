<?php


use App\Http\Controllers\branchController;
use App\Http\Controllers\deductionController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\employeePayrollController;
use App\Http\Controllers\overtimeController;
use App\Http\Controllers\salaryController;
use App\Http\Controllers\timeController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/employee', function () {
    return view('employee');
});

Route::get('/hr', function () {
    return view('hr');
});

Route::get('/approver', function () {
    return view('approver');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/accounting', function () {
    return view('accounting');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::resource('employee', employeeController::class);

// Route::get('employee', [employeeController::class, 'index']);


// Route::get('/', [EmployeeController::class, 'index']);
Route::get('/', [employeeController::class, 'index']);
Route::get('/getUsers', [employeeController::class, 'getUsers']);


