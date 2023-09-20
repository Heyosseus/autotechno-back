<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnplannedTaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'unplanned_tasks' => 'required|string',
            'task_product' => 'required|string',
            'factual_time' => 'required|string',
            'completion_date' => 'required',
        ];
    }
}
