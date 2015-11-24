<?php

namespace AppTaxi;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;



class DatosUsuario extends Model

{



    //
    protected $table = 'datos_usuarios';
    public $timestapms=false;

    protected $fillable = ['nombre', 'apellido', 'edad', 'correo','telefono','genero'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['nombre', 'apellido', 'edad', 'correo','telefono','genero'];

}
