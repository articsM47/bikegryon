<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Test extends JsonResource
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
            'review' => $this->review,
            'client_id' => $this->client_id,
            'testday_id' => $this->testday_id,
            'bike_id' => $this->bike_id,
            'endTime' => $this->endTime,

        ];
    }
}
