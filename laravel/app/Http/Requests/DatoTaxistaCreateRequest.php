<?php

namespace AppTaxi\Http\Requests;

use AppTaxi\Http\Requests\Request;

class DatoTaxistaCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [


            //'name', 'apellido', 'telefono', 'direccion','numero_taxi


            //'nombre', 'apellido', 'edad' ,'telefono', 'licencia','reftax'


//            'nombre'=>'required',
  //          'apellido'=>'required',
    //        'edad'=>'required',
      //      'telefono'=>'required',
        //    'licencia'=>'required',
          //  'reftax'=>'required',

              ////
              'nombre' => 'required',
              'apellido' => 'required',
              'edad' => 'required',
              'telefono' => 'required',
              'licencia' => 'required',
              'reftax' => 'required',
          //  'genero'=>'required',



        ];
    }
}
