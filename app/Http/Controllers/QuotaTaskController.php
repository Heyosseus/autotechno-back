<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuotaTaskRequest;
use App\Models\QuotaTask;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class QuotaTaskController extends Controller
{
    public function index() : JsonResponse
    {
        $data = QuotaTask::all();

        return response()->json($data, 200);
    }
    public function store(QuotaTaskRequest $request) : JsonResponse
    {
        $quota = QuotaTask::create($request->validated());

        return response()->json($quota, 201);
    }

    public function update(Request $request, $id) : JsonResponse
    {
        $task = QuotaTask::find($id);

        if (!$task) {
            return response()->json(['message' => 'Name not found'], 404);
        }

        $task->update([
            'quota_tasks' => $request->input('quota_tasks'),
            'task_product' => $request->input('task_product'),
            'planned_time' => $request->input('planned_time'),
            'factual_time' => $request->input('factual_time'),
            'completion_date' => $request->input('completion_date'),
        ]);

        return response()->json($task, 200);
    }

    public function destroy($id): JsonResponse
    {
        QuotaTask::destroy($id);

        return response()->json('deleted',  200);
    }
}
