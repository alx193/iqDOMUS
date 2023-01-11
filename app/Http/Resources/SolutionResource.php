<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SolutionResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'b1' => $this->b1,
            'b2' => $this->b2,
            'b3' => $this->b3,
            'b4' => $this->b4,
            'b5' => $this->b5,
            'b6' => $this->b6,
            'b7' => $this->b7,
            'b8' => $this->b8,
            'b9' => $this->b9,
            'b10' => $this->b10,
            'b11' => $this->b11,
            'b12' => $this->b12,
            'b13' => $this->b13,
        ];
    }
}
