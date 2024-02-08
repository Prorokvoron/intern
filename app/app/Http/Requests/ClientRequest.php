<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'last_name'   => 'string',
            'first_name'  => 'string',
            'middle_name' => 'string|sometimes',
            'full_name'   => 'string',
            'date_of_birth' => 'date',
            'sex'         => 'char',
            'preferred_name' => 'string',
            'telegram'    => 'string|sometimes',
            'phone'       => 'integer',
            'phone_comment' => 'string',
            'email'         => 'string',
            'address'       => 'string',
            'country_code'  => 'string',
            'cite'          => 'string',
            'comment'       => 'string'
        ];
    }
}
