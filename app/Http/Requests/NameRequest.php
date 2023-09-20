<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NameRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'dimension' => 'required|string',
            'quantity_of_last_week' => 'required|string',
            'quota_last_month' => 'required|string',
            'note' => 'required|string',
        ];
    }
}
