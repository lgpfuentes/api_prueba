<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Libro;
use App\Http\Resources\V1\LibroResource;

class LibroController extends Controller
{
    public function index()
    {
        return LibroResource::collection(Libro::latest()->paginate());
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Libro $libro)
    {
        return new LibroResource($libro);
    }

    public function update(Request $request, Libro $libro)
    {
        //
    }

    public function destroy(Libro $libro)
    {
        if( $libro->delete() ){
            return response()->json([
                "message" => "Success"
            ],204);
        }
        
        return response()->json([
            "message" => "Not found"
        ],404);
    }
}
