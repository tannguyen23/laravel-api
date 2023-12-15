<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
          "tmp"=> $this->resource,
          "id" => $this->id,
          "name"=> $this->name,
          "email"=> $this->email,
          "type" => $this->type,
          "address" => $this->address,
          "city" => $this->city,
          "state" => $this->state,
          "postalCode" => $this-> postal_code,
        ];
    }
}