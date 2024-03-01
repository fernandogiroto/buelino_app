<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{

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
