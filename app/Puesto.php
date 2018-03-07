<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $table = 'puestos';	 

	protected $fillable = ['nombre','barrio','direccion','municipio','user_id'];
}
