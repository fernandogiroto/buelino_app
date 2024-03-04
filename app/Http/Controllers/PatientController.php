<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Employee;
use Inertia\Inertia;

use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function index()
    {
        $userId = Auth::id();
        $clinic = Employee::where('user_id', $userId)->firstOrFail()->clinic;
        $patients = $clinic->patients()->paginate();
        return Inertia::render('Patients/PatientsView', [
            'patients' => $patients
        ]);
    }

    public function addPatientView()
    {
        return Inertia::render('Patients/PatientsAddView');
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Patient::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'responsible' =>  $request->responsible,
            'entry_date' => $request->entry_date,
            'leaving_date' => $request->leaving_date,

        ]);
        return redirect(RouteServiceProvider::HOME);
    }
}
