<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        return Inertia::render('Activities/ActivitiesView');
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
