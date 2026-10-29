<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Libro_SO extends Model
{
    protected $table = 'libros';
 
    protected $fillable = ['titulo', 'autor', 'anio_publicacion'];
}
