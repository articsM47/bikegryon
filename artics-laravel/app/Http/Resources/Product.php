<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
     public function toArray($request)
    {
        return [
            'id' => $this->id,
            'shortDescr' => $this->shortDescr,
            'longDescr' => $this->longDescr,
            'distinctiveSign' => $this->distinctiveSign,
            'brand_id' => $this->brand_id,
            'picture' => $this->picture,
        ];
    }
}
