<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    protected $fillable = [
        'foto',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'direccion',
        'salario',
        'fecha_contratacion',
    ];
}
