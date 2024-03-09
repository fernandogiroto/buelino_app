<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\JsonResponse;
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


    public function store(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'surname' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|string|max:255',
                'birthday' => 'required|date',
                'responsible' => 'required|string|max:255',
                'entry_date' => 'required|date',
                'leaving_date' => 'nullable|date',
                'avatar' => 'nullable|string|max:255',
            ]);

            $clinicId = Auth::user()->employee->clinic_id;
            Patient::create([
                'clinic_id' => $clinicId,
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'phone' => $request->phone,
                'birthday' => $request->birthday,
                'responsible' =>  $request->responsible,
                'entry_date' => $request->entry_date,
                'leaving_date' => $request->leaving_date,
                'avatar' => $request->avatar
            ]);
            return redirect()->back()->with('success', 'Paciente criado com sucesso');
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        }
    }
}
