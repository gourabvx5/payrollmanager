<?php

use App\Models\User;
use App\Models\Employeeleave;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('home');
});

//Employee Routes 

Route::get('/employee/register',[EmployeeController::class,'register_page'])->middleware('guest');

Route::post('/employee/register',[EmployeeController::class,'create_employee']);

Route::get('/employee/login',[EmployeeController::class,'login_page'])->middleware('guest');

Route::post('/employee/login',[EmployeeController::class,'login_employee']);

Route::get('/employee/dashboard',[EmployeeController::class,'employee_dashboard'])->middleware('guest');

Route::post('/employee/leaverequest',[EmployeeController::class,'employee_leave_request'])->middleware('guest'); 

//Manager Routes

Route::get('/manager/register',[ManagerController::class,'register_page'])->middleware('guest');

Route::post('/manager/register',[ManagerController::class,'create_manager']);

Route::get('/manager/login',[ManagerController::class,'login_page'])->middleware('guest');

Route::get('/manager/leavereq/{id}',[ManagerController::class,'leave_req_view'])->name('leavereq.show');

Route::get('/manager/leave/{id}',[ManagerController::class,'leave_req_edit']);

Route::put('/manager/{id}',[ManagerController::class,'leave_req_update']);

Route::get('/manager/dashboard',[ManagerController::class,'manager_dashboard'])->middleware('guest');


