<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnplannedTaskRequest;
use App\Models\UnplannedTask;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UnplannedTaskController extends Controller
{
    public function store(UnplannedTaskRequest $request) : JsonResponse
    {
        $unplannedTask = UnplannedTask::create($request->validated());

        return response()->json($unplannedTask, 201);
    }
}
