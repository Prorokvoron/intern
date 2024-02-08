<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'card_id'=>'required|integer',
            'client_id'=>'required|integer',
            'title' => 'string|sometimes',
            'description' =>'string|sometimes',
        ];
    }
}
