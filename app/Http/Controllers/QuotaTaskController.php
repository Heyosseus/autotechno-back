<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuotaTaskRequest;
use App\Models\QuotaTask;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class QuotaTaskController extends Controller
{
    public function store(QuotaTaskRequest $request) : JsonResponse
    {
        $quota = QuotaTask::create($request->validated());

        return response()->json($quota, 201);
    }
}
