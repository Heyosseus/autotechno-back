<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(TaskRequest $request) : JsonResponse
    {
        $task = Task::create($request->validated());

        return response()->json($task, 201);
    }

}
