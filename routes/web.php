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
Route::get('/othistory', function () {
    return view('othistory');
});
