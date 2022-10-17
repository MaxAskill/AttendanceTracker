<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SendOTRequestEmailController;

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

// Route::get('/employee', [SendOTRequestEmailController::class, 'index']);

// Route::post('/employee/send', [SendOTRequestEmailController::class, 'send']);


