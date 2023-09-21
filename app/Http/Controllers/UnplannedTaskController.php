<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnplannedTaskRequest;
use App\Models\UnplannedTask;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UnplannedTaskController extends Controller
{
    public function index() : JsonResponse
    {
        $data = UnplannedTask::all();

        return response()->json($data, 200);
    }
    public function store(UnplannedTaskRequest $request) : JsonResponse
    {
        $unplannedTask = UnplannedTask::create($request->validated());

        return response()->json($unplannedTask, 201);
    }

    public function update(Request $request, $id) : JsonResponse
    {
        $task = UnplannedTask::find($id);

        if (!$task) {
            return response()->json(['message' => 'Name not found'], 404);
        }

        $task->update([
            'unplanned_task' => $request->input('unplanned_task'),
            'task_product' => $request->input('task_product'),
            'factual_time' => $request->input('factual_time'),
            'completion_date' => $request->input('completion_date'),
        ]);

        return response()->json($task, 200);
    }

    public function destroy($id): JsonResponse
    {
        UnplannedTask::destroy($id);

        return response()->json('deleted',  200);
    }
}
