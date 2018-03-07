<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Lider extends Model
{
    protected $table = 'liders';	 

	protected $fillable = ['nombre', 'apellido', 'cedula', 'telefono', 'puesto_id', 'coordinador_id', 'email'];
}
