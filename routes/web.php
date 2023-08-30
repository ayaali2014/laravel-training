<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get('/employee',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
Route::get('/employee/edit/{ssn}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::put('/employee/update',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/employee/{ssn}',[EmployeeController::class,'show'])->name('employee.show');
Route::delete('/employee/delete',[EmployeeController::class,'delete'])->name('employee.delete');

//////////////////////////

Route::get('/student',[StudentController::class ,'index'])->name('student.index');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::put('/employee/update',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/student/edit/{stud_id}',[StudentController::class,'edit'])->name('student.edit');
Route::delete('/student/delete',[StudentController::class,'delete'])->name('student.delete');
Route::get('/student/{stud_id}',[StudentController::class,'show'])->name('student.show');

//////////////////////////

Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
Route::put('/products/update',[ProductController::class,'update'])->name('product.update');
Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/products/store',[ProductController::class,'store'])->name('product.store');
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/products/{id}',[ProductController::class,'show'])->name('product.show');

////////////////////////////

Route::resource('/category',CategoryController::class);

///////////////////////////

Route::resource('/order',OrderController::class);

