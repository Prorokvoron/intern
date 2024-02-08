<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TreeResourceShow extends JsonResource
{

    public static $wrap = false;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'region' => $this->resource->region
        ];
    }
}
