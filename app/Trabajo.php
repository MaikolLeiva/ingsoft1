<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $fillable = [
        'nombre', 'primerEstudiante', 'primerRut', 'primeraCarrera', 'segundoEstudiante', 'segundoRut', 'segundaCarrera', 'tercerEstudiante', 'tercerRut', 
        'terceraCarrera','cuartoEstudiante', 'cuartoRut', 'cuartaCarrera', 'primerProfesor', 'rutPrimerProfesor', 'segundoProfesor', 'rutSegundoProfesor', 'user_id', 
    ];
}