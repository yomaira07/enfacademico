<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Docente extends Model
{
    use Notifiable;

    protected $table = 'docente';

	    const CREATED_AT = 'created_at';
        const UPDATED_AT = 'updated_at';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nacionalidad', 'cedula', 'cod_rif', 'rif', 'primer_nombre', 'segundo_nombre', 
            'primer_apellido', 'segundo_apellido', 'id_sexo', 'telefono_hab', 'telefono_cel', 
            'correo', 'id_nivel_academico', 'status'
    ];
}
