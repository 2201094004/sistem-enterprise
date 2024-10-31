<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\SendPromotionController;
use App\Http\Controllers\backsite\EmailController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Redirect to login if user is not authenticated
Route::get('/', function () {
    return redirect('/dashboard');
});

// Dashboard route, only accessible by authenticated users
Route::get('/dashboard', function () {
    return view('admin.blank.index');
})->name('dashboard');

// Route untuk Submenu 1
Route::get('/submenu1', [AdminController::class, 'submenu1'])->name('submenu1');

// Resource routes for users, roles, departments, employees, payroll, leave, and attendance
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('departments', DepartmentsController::class);
Route::resource('employees', EmployeesController::class);
Route::resource('payroll', PayrollController::class);
Route::resource('leave', LeaveController::class);
Route::resource('attendance', AttendanceController::class);

// Email Route
Route::get('/send-email', [EmailController::class, 'send']);

// Customer Relationship Management
Route::resource('customers', CustomerController::class);
Route::resource('promotions', PromotionController::class);

// Send Promotions Routes
Route::prefix('send-promotions')->name('send-promotions.')->group(function () {
    Route::get('/', [SendPromotionController::class, 'index'])->name('index');       
    Route::get('/create', [SendPromotionController::class, 'create'])->name('create'); 
    Route::post('/', [SendPromotionController::class, 'store'])->name('store');        
    Route::get('/{sendPromotion}/edit', [SendPromotionController::class, 'edit'])->name('edit'); 
    Route::put('/{sendPromotion}', [SendPromotionController::class, 'update'])->name('update'); 
    Route::delete('/{sendPromotion}', [SendPromotionController::class, 'destroy'])->name('destroy');
});
