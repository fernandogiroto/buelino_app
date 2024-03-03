<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
        return Inertia::render('Employees/EmployeesView', [
            'patients' => Patient::where('user_id', $userId)->paginate()
        ]);
    }

    public function addEmployeeView()
    {
        return Inertia::render('Employees/EmployeesAddView');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Employee::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $request->avatar,
            'role' =>  $request->role,
            'password' => Hash::make($request->password),
        ]);
        return redirect(RouteServiceProvider::HOME);
    }
}
