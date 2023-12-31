<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class LibroResource extends JsonResource
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
            'nombre_libro' => $this->title,
            'descripcion_libro' => $this->description,
            'autor' => [
                'name' => $this->user->name,
                'email' => $this->user->email
            ],
            'fecha_publicacion' => $this->created_at,
        ];       
    }
}
