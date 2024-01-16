<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostIndexResourceItem extends JsonResource
{

    public function toArray(Request $request): array
    {

        return [
            "id" => $this->resource->id,
             "name" => $this->resource->name,
            "middle_name" => $this->resource->middle_name,
            "family_name" => $this->resource->middle_name,
            "birthData" =>  $this->resource->birthData,
            "phone" => $this->resource->phone,
            "mail" => $this->resource->mail
        ];
    }
}
