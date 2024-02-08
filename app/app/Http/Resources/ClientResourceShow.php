<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResourceShow extends JsonResource
{
    public static $wrap = false;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'last_name' => $this->resource->last_name,
           'phone' => $this->resource->phone,
            'emails' => $this->resource->email
        ];
    }
}
