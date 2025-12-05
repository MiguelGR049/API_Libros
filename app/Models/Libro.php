<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'Libros';
    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'anio_publicacion'
    ];
}