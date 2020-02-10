<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeaturesResource extends JsonResource
{

    public function toArray($request)
    {
   return 
       [
         'f_title' => $this->title,
         'f_desc' => $this->desc,
         'f_icon' => $this->icon,
         'f_date' => $this->created_at->format('Y-m-d'),
       ];
    }
}
