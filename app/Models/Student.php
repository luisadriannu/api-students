<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "alumno";
    protected $fillable = [
      'id_alumno',
      'dni',
      'apellido_alumno',
      'nombre_alumno', 
      'distrito', 
      'telefono', 
      'correo', 
      'edad', 
      'fecha_nac',
      'curso',
      'horario'
    ];
}
