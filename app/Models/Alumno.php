<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';
    protected $fillable = ['codigo','apellido_paterno', 'apellido_materno', 'nombres', 'direccion', 'fecha_nacimiento', 'edad'];
}
