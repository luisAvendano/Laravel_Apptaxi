<?php

namespace AppTaxi;

use Illuminate\Database\Eloquent\Model;

class DatosTaxi extends Model
{
    //
  //  protected $table = 'datostaxis';


    protected $table = 'taxista';/// pendiente para checar como DatosUsuario
    public $timestapms=false;

    protected $fillable = ['nombre', 'apellido', 'edad' ,'telefono', 'licencia', 'reftax'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
       protected $hidden = ['nombre', 'apellido', 'edad' ,'telefono', 'licencia', 'reftax'];





}
