<?php

namespace App\Http\Controllers;

use App\Http\Requests\NameRequest;
use App\Models\Name;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function store(NameRequest $request) : JsonResponse
    {
        $name = Name::create($request->validated());

        return response()->json($name, 201);
    }

}
