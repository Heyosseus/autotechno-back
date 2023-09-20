<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'tasks' => 'required|string',
            'task_product' => 'required|string',
            'planned_time' => 'required|string',
            'factual_time' => 'required|string',
            'completion_date' => 'required',
        ];
    }
}
