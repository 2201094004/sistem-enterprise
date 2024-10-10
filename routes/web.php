<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeaveController;

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

// Redirect to login if user is not authenticated
Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/dashboard');
    }
    return redirect('/login');
});

// Dashboard route, only accessible by authenticated users
Route::get('/dashboard', function () {
    return view('admin.blank.index');
})->middleware(['auth', 'verified'])->name('dashboard');


    // Route untuk Submenu 1
Route::get('/submenu1', [AdminController::class, 'submenu1'])->name('submenu1');

Route::resource('users', UserController::class);

Route::resource('roles', RoleController::class);

// Auth routes (login, register, password reset, etc.)
require __DIR__.'/auth.php';

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::resource('departments', DepartmentsController::class);

Route::resource('employees', EmployeesController::class);

Route::resource('payroll', PayrollController::class);
Route::get('/payrolls', [PayrollController::class, 'index'])->name('payroll.index');

Route::resource('leave', \App\Http\Controllers\LeaveController::class);





