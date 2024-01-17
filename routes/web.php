<?php

use App\Http\Controllers\CourseController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CourseController::class,'index'])->name('course.list');



Route::get('/register',[StudentController::class,'register'])->name('register');
Route::post('/',[StudentController::class,'postRegister'])->name('auth.store');
