<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Votante extends Model
{
    protected $table = 'votantes';	 

	protected $fillable = ['nombre','apellido','cedula','telefono','email','puesto_id','lider_id','user_id'];
}
