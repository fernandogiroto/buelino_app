<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;


class EmployeeController extends Controller
{


    public function index()
    {
        $userId = Auth::id();
        $clinic = Employee::where('user_id', $userId)->firstOrFail()->clinic;
        $employees = $clinic->employees()->with('user')->paginate(5);
        return Inertia::render('Employees/EmployeesView', [
            'employees' => $employees
        ]);
    }

    public function employees($perPage)
    {
        $userId = Auth::id();
        $clinic = Employee::where('user_id', $userId)->firstOrFail()->clinic;

        $employeesQuery = $clinic->employees()->whereHas('user', function ($query) {
            $query->where('status', 0);
        })->with('user');

        $employees = $employeesQuery->take($perPage)->get();
        return response()->json($employees);
    }

    public function addEmployeeView()
    {
        return Inertia::render('Employees/EmployeesAddView');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        try {
            $clinicId = Auth::user()->employee->clinic_id;

            try {
                $user = User::create([
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'avatar' => $request->avatar,
                    'gender' => $request->gender,
                ]);
            } catch (ValidationException $e) {
                return back()->withErrors($e->validator)->withInput();
            }

            Employee::create([
                'user_id' => $user->id,
                'clinic_id' => $clinicId,
                'role' => $request->role
            ]);
            return redirect()->back()->with('success', 'Paciente criado com sucesso');
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }
    }
}
