<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainingTaskRequest;
use App\Models\Training;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TrainingTaskController extends Controller
{
    public function store(TrainingTaskRequest $request): JsonResponse
    {
        $training = Training::create($request->validated());

        return response()->json($training, 201);
    }
}
