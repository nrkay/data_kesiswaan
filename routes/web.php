<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentController;
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
    return view('Pages.Home');
});



Route::get('/ekskul', function () {
    return view('Pages.Ekskul');
});

Route::get('/detail/{id}', [StudentController::class, 'show']);
Route::get('/addStudent', [StudentController::class, 'add']);
Route::get('/editStudent/{id}', [StudentController::class, 'edit']);
Route::post('/addStudent', [StudentController::class, 'store']);
Route::put('/editStudent/{id}', [StudentController::class, 'update']);




Route::get('/student', [StudentController::class, 'index']);
Route::get('/class', [ClassroomController::class, 'index']);
Route::get('/ekskul', [ExtracurricularController::class, 'index']);
