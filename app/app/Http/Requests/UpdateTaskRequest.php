<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'card_id'=>'integer',
            'client_id'=>'integer',
            'title' => 'string',
            'description' =>'string',
        ];
    }
}
