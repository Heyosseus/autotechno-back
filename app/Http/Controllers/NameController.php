<?php

namespace App\Http\Controllers;

use App\Http\Requests\NameRequest;
use App\Models\Name;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index() : JsonResponse
    {
        $data = Name::all();
        return response()->json($data);

    }
    public function store(NameRequest $request) : JsonResponse
    {
        $name = Name::create($request->validated());

        return response()->json($name, 201);
    }

    public function update(Request $request, $id) : JsonResponse
    {
        $name = Name::find($id);

        if (!$name) {
            return response()->json(['message' => 'Name not found'], 404);
        }

        $name->update([
            'name' => $request->input('name'),
            'dimension' => $request->input('dimension'),
            'quantity_of_last_week' => $request->input('quantity_of_last_week'),
            'quota_last_month' => $request->input('quota_last_month'),
            'note' => $request->input('note'),
        ]);

        return response()->json($name, 200);
    }

    public function destroy($id) : JsonResponse
    {
       Name::destroy($id);

        return response()->json('deleted',  200);

    }
}
