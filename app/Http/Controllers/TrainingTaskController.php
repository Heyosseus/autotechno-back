<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainingTaskRequest;
use App\Models\QuotaTask;
use App\Models\Training;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TrainingTaskController extends Controller
{
    public function index() : JsonResponse
    {
        $data = Training::all();

        return response()->json($data, 200);
    }
    public function store(TrainingTaskRequest $request): JsonResponse
    {
        $training = Training::create($request->validated());

        return response()->json($training, 201);
    }
    public function update(Request $request, $id) : JsonResponse
    {
        $task = Training::find($id);

        if (!$task) {
            return response()->json(['message' => 'Name not found'], 404);
        }

        $task->update([
            'training_tasks' => $request->input('training_tasks'),
            'task_product' => $request->input('task_product'),
            'planned_time' => $request->input('planned_time'),
            'factual_time' => $request->input('factual_time'),
            'completion_date' => $request->input('completion_date'),
        ]);

        return response()->json($task, 200);
    }

    public function destroy($id): JsonResponse
    {
        Training::destroy($id);

        return response()->json('deleted',  200);
    }
}
