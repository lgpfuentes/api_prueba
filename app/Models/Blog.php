<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    //Solución a error Add [title] to fillable property to allow mass assignment on [App\Post]
    protected $fillable = ['title', 'body'];
}
