<?php

use App\Http\Controllers\branchController;
use App\Http\Controllers\deductionController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\employeePayrollController;
use App\Http\Controllers\overtimeController;
use App\Http\Controllers\salaryController;
use App\Http\Controllers\timeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:sanctum']], function(){

});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});


Route::post('employee', [employeeController::class, 'create']);
Route::get('employee', [employeeController::class, 'index']);
Route::post('UserAuthentication', [employeeController::class, 'UserAuthentication']);
Route::post('Branch', [branchController::class, 'Branch']);
Route::post('Deduction', [deductionController::class, 'Deduction']);
Route::post('Payroll', [employeePayrollController::class, 'Payroll']);
Route::post('Overtime', [overtimeController::class, 'Overtime']);
Route::post('salaryMaintenance', [salaryController::class, 'store']);
Route::post('Time', [timeController::class, 'Time']);

