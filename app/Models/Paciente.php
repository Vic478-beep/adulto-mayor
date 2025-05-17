<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Paciente extends Authenticatable
{
    use Notifiable;

    protected $table = 'pacientes';

    protected $fillable = [
        'nombre',
        'apellido',
        'ci',
        'telefono',
        'direccion',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
