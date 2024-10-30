<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //We can control response fields
        return [
            'id' => $this->id,
            'name' => $this->name,
            //Putting keys together
            // 'nombre_id' => $this->id . " - " . $this->name
            'icon' => $this->icon
        ];
    }
}
