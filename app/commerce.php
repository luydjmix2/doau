<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commerce extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'name_one', 'name_two', 'last_name_one', 'last_name_two', 'email', 'password', 'movil', 'address', 'img', 'perfil', 'autorizacion_manejo_de_datos',
    ];
}
