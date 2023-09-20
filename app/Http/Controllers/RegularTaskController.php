<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegularTaskRequest;
use App\Models\RegularTask;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegularTaskController extends Controller
{
    public function store(RegularTaskRequest $request): JsonResponse
    {
        $regularTask = RegularTask::create($request->validated());

        return response()->json($regularTask, 201);
     }
}
