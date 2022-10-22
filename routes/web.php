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

Route::get('/', [UdemyController::class,'index']);

//ADD DATA
Route::post('/create/employee', [UdemyController::class,'createEmployee'])->name('createemployee');
Route::get('/add/employee', [UdemyController::class,'addEmployee']);

//ADD DATA
Route::get('/add/department', [UdemyController::class,'addDepartment']);
Route::post('/create/department', [UdemyController::class,'createDepartment']);

//VIEW ALL DEPARTMENTS / EMPLOYEES
Route::get('/view/departmentlist', [UdemyController::class,'viewDepartmentList']);
Route::get('/view/employeelist', [UdemyController::class,'viewEmployeeList']);

//VIEW SINGLE DEPARTMENT/EMPLOYEE
// href name / UdemyController > Controllers name / viewSingleDepartment -> function name inside the UdemyController
Route::get('/view/department/{id}', [UdemyController::class,'viewSingleDepartment']);
Route::get('/view/employee/{dept_id}/{id}', [UdemyController::class,'viewSingleEmployee']);

//UPDATE
Route::get('/edit/department/{id}', [UdemyController::class,'editDepartment']);
Route::get('/edit/employee/{id}', [UdemyController::class,'editEmployee']);

Route::post('/update/department/{id}', [UdemyController::class,'updateDepartment']);
Route::post('/update/employee/{id}', [UdemyController::class,'updateEmployee']);

//DELETE
Route::get('/delete/department/{id}', [UdemyController::class,'deleteDepartment']);
Route::get('/delete/employee/{id}', [UdemyController::class,'deleteEmployee']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');