<?php

namespace AppTaxi;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    //

    protected $table = 'terminal';
    public $timestapms=false;



    protected $fillable = ['nombreter', 'calle', 'colonia', 'numero','cp','tarifa','estado'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['nombreter', 'calle', 'colonia', 'numero','cp','tarifa','estado'];
}
