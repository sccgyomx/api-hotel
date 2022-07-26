<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RoomsResource extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'room_number'=>$this->room_number,
            'state'=>$this->state,
            'floor'=>$this->floor,
            'bed_number'=>$this->bed_number,
            'type_of_bed'=>$this->type_of_bed,
            'price_per_night'=>$this-> price_per_night,
            'price_per_hour'=>$this->price_per_hour,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
