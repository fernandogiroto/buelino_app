<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medication;
use Inertia\Inertia;

class MedicationController extends Controller
{

    public function index()
    {
        $medications = Medication::paginate(10);
        return Inertia::render('MedicationView', [
            'medications' => $medications
        ]);
    }
}
