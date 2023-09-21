<?php

namespace App\Http\Controllers;

use App\Models\Name;
use App\Models\QuotaTask;
use App\Models\RegularTask;
use App\Models\Task;
use App\Models\Training;
use App\Models\UnplannedTask;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index(): JsonResponse
    {
        $data = [
            'names' => Name::all(),
            'tasks' => Task::all(),
            'regularTasks' => RegularTask::all(),
            'trainings' => Training::all(),
            'quotas' => QuotaTask::all(),
            'unplannedTasks' => UnplannedTask::all(),
        ];

        return response()->json($data, 200);
    }
}
