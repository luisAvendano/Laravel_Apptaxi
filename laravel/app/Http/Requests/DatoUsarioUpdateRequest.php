<?php

namespace AppTaxi\Http\Requests;

use AppTaxi\Http\Requests\Request;

class DatoUsarioUpdateRequest extends Request
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
    
          'nombre'=>'required',
          'apellido'=>'required',
          'edad'=>'required',
          'correo'=>'required',
          'telefono'=>'required',
          'genero'=>'required',
            //
        ];
    }
}
