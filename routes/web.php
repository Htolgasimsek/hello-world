<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/student', 'App\Http\Controllers\StudentController@getStudents');
Route::get('/student-insert', 'App\Http\Controllers\StudentController@showInsetrPage');
Route::get('/update/{id}', 'App\Http\Controllers\StudentController@updateStatus')->name("updateStatus");

