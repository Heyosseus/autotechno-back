<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingTaskRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'training_tasks' => 'required|string',
            'task_product' => 'required|string',
            'planned_time' => 'required|string',
            'factual_time' => 'required|string',
            'completion_date' => 'required',
        ];
    }
}
