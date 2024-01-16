<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientPhoneRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'client_id' => 'integer',
            'phone' => 'string',
            'comment' => 'string'
        ];
    }
}
