<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;
use App\Models\Employee;

class ActivityController extends Controller
{
    public function index()
    {
        return Inertia::render('Activities/ActivitiesView');
    }

    public function addActivitiesView()
    {
        $userId = Auth::id();
        $clinic = Employee::where('user_id', $userId)->firstOrFail()->clinic;
        $patients = $clinic->patients()->paginate();
        return Inertia::render('Activities/ActivitiesAddView', [
            'patients' => $patients
        ]);
    }

    public function activities()
    {
        $clinicId = Auth::user()->employee->clinic_id;
        $activities = Activity::with('service', 'patient', 'employee.user')
            ->where('clinic_id', $clinicId)
            ->get();
        return response()->json($activities);
    }
}
