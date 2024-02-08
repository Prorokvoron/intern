<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientIndexResourceItem extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'first_name' => $this->resource->firts_name,
            'last_name' => $this->resource->last_name,
            'middle_name' => $this->resource->middle_name,
            'phones' => $this->resource->getAllPhones(),
            'emails' => $this->resource->getALLEmails(),
            'cards_active'=>$this->resource->cardsActive
        ];
    }
}
