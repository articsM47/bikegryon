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
            'created_at' => $this->created_at,
            'creation_time' => strtotime($this->created_at),
            'endTime' => $this->endTime,
            'distinctiveSign' => $this->bike->distinctiveSign,
            'badgeNo' => $this->badgeNo
        ];
    }
}
