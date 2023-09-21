<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index() : JsonResponse
    {
        $data = Task::all();

        return response()->json($data, 200);
    }
    public function store(TaskRequest $request) : JsonResponse
    {
        $task = Task::create($request->validated());

        return response()->json($task, 201);
    }

    public function update(Request $request, $id) : JsonResponse
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Name not found'], 404);
        }

        $task->update([
            'tasks' => $request->input('tasks'),
            'task_product' => $request->input('task_product'),
            'planned_time' => $request->input('planned_time'),
            'factual_time' => $request->input('factual_time'),
            'completion_date' => $request->input('completion_date'),
        ]);

        return response()->json($task, 200);
    }

    public function destroy($id): JsonResponse
    {
     Task::destroy($id);

        return response()->json('deleted',  200);
    }

}
