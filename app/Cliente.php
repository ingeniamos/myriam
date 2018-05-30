<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = ['nombre','apellido','cedula','telefono','email','intereses','estado','profesion_id','user_id'];
}
