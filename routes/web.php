<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [CRUDController::class,'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome']);
    //ADD DATA
    Route::post('/create/employee', [CRUDController::class,'createEmployee'])->name('createemployee');
    Route::get('/add/employee', [CRUDController::class,'addEmployee']);

    //ADD DATA
    Route::get('/add/department', [CRUDController::class,'addDepartment']);
    Route::post('/create/department', [CRUDController::class,'createDepartment']);

    //VIEW ALL DEPARTMENTS / EMPLOYEES
    Route::get('/view/departmentlist', [CRUDController::class,'viewDepartmentList']);
    Route::get('/view/employeelist', [CRUDController::class,'viewEmployeeList']);

    //VIEW SINGLE DEPARTMENT/EMPLOYEE
    // href name / CRUDController > Controllers name / viewSingleDepartment -> function name inside the CRUDController
    Route::get('/view/department/{id}', [CRUDController::class,'viewSingleDepartment']);
    Route::get('/view/employee/{dept_id}/{id}', [CRUDController::class,'viewSingleEmployee']);

    //UPDATE
    Route::get('/edit/department/{id}', [CRUDController::class,'editDepartment']);
    Route::get('/edit/employee/{id}', [CRUDController::class,'editEmployee']);

    Route::post('/update/department/{id}', [CRUDController::class,'updateDepartment']);
    Route::post('/update/employee/{id}', [CRUDController::class,'updateEmployee']);

    //DELETE
    Route::get('/delete/department/{id}', [CRUDController::class,'deleteDepartment']);
    Route::get('/delete/employee/{id}', [CRUDController::class,'deleteEmployee']);
});
  
/*------------------------------------------
--------------------------------------------
All Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});