<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientPhoneRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'client_id' => 'integer|sometimes',
            'phone' => 'string|sometimes',
            'comment' => 'string|sometimes'
        ];
    }
}
