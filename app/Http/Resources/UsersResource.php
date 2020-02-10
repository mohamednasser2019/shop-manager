<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return 
       [
         'f_name' => $this->name,
         'f_email' => $this->email,
         'f_date' => $this->created_at->format('Y-m-d'),
       ];
    }
}
