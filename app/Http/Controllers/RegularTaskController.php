<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegularTaskRequest;
use App\Models\RegularTask;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegularTaskController extends Controller
{
    public function index() : JsonResponse
    {
        $data = RegularTask::all();

        return response()->json($data, 200);
    }
    public function store(RegularTaskRequest $request): JsonResponse
    {
        $regularTask = RegularTask::create($request->validated());

        return response()->json($regularTask, 201);
     }
    public function update(Request $request, $id) : JsonResponse
    {
        $task = RegularTask::find($id);

        if (!$task) {
            return response()->json(['message' => 'Name not found'], 404);
        }

        $task->update([
            'regular_tasks' => $request->input('regular_tasks'),
            'task_product' => $request->input('task_product'),
            'planned_time' => $request->input('planned_time'),
            'factual_time' => $request->input('factual_time'),
            'completion_date' => $request->input('completion_date'),
        ]);

        return response()->json($task, 200);
    }

    public function destroy($id): JsonResponse
    {
        RegularTask::destroy($id);

        return response()->json('deleted',  200);
    }
}
