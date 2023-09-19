<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class LibroCollection extends ResourceCollection
{
     //Utilizamos el formato de datos de LibroResource, para que los recursos individuales de la colección
    //se muestren con el formato indicado en la versión 2.

    public $collects = LibroResource::class;

    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'editorial' => 'Editorial Elektron',
                'Autor'     => [
                    'Pérez Fuentes',
                    'Luis Guillermo'
                ]
                ],
                'type' => 'Libros'
        ];
    }
}
