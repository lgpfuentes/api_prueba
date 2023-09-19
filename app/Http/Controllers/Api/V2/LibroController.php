<?php

namespace App\Http\Controllers\Api\V2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Libro;
use App\Http\Resources\V2\LibroResource;
use App\Http\Resources\V2\LibroCollection;

class LibroController extends Controller
{
    public function index()
    {
        return new LibroCollection(Libro::latest()->paginate());
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
        //
    }
}
