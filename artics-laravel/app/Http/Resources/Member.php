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
        return [
            'name' => $this->name,
            'firstname' => $this->firstname,
            'birthDay' => $this->birthDay,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
            'mail1' => $this->mail1,
            'mail2' => $this->mail2,
            'comment' => $this->comment,
            'address_id' => $this->address_id,
            'role' => $this->role
        ];
    }
}
