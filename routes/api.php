<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/employees', [EmployeeController::class, 'employees']);



Route::middleware('auth')->group(function () {


    // Route::get('employees', [EmployeeController::class, 'employees'])->name('api.employees');;
    // Route::post('patient', [PatientController::class, 'store'])->name('patients.create');
    // Route::post('employees', [EmployeeController::class, 'store'])->name('employees.create');
});
