<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Member extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if(isset($request->badgeMapping[$this->id])) {
            $mapping = $request->badgeMapping[$this->id];
            $badgeNo = isset($mapping['badgeNo']) ? $mapping['badgeNo'] : '';
            $clientId = $mapping['clientId'];
        } else {
            $badgeNo = '';
            $clientId = 0;
        }
        return [
            'name' => $this->name,
            'firstname' => $this->firstname,
            'birthDay' => $this->birthDay,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
            'email1' => $this->email1,
            'email2' => $this->email2,
            'comment' => $this->comment,
            'address_id' => $this->address_id,
            'role' => $this->role,
            'badgeNo' => $badgeNo,
            'clientId' => $clientId,
            'testDayId' => $request->testDayId
        ];
    }
}
