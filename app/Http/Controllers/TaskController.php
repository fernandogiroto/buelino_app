<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function tasks()
    {
        $clinicId = Auth::user()->employee->clinic_id;
        $tasks = Task::where('clinic_id', $clinicId)->get();
        return response()->json($tasks);
    }
}
