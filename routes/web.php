<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ActivityController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    // PASS TO API
    Route::get('/active_employees/{perPage}', [EmployeeController::class, 'employees']);
    Route::get('/tasks', [TaskController::class, 'tasks']);
    Route::get('/activities/list', [ActivityController::class, 'activities']);
    Route::get('patient/{id}', [PatientController::class, 'patient'])->name('patients.patient');
    Route::post('patient', [PatientController::class, 'store'])->name('patients.create');
    Route::post('employees', [EmployeeController::class, 'store'])->name('employees.create');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('patients', [PatientController::class, 'index'])->name('patients.index');
    Route::get('patients/add', [PatientController::class, 'addPatientView'])->name('patients.add');
    Route::get('employees', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('employees/add', [EmployeeController::class, 'addEmployeeView'])->name('employees.add');
    Route::get('medications', [MedicationController::class, 'index'])->name('medications.index');
    Route::get('activities', [ActivityController::class, 'index'])->name('activities.index');
});

require __DIR__ . '/auth.php';
