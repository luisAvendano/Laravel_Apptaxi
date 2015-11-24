<?php

namespace AppTaxi;

use Illuminate\Database\Eloquent\Model;

class Taxis extends Model
{
    //
    protected $table = 'taxis';
    public $timestamps=false;

    protected $fillable = ['marca', 'modelo', 'placa', 'numtax'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['marca', 'modelo', 'placa', 'numtax'];

}
