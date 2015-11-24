<?php

namespace AppTaxi\Http\Requests;

use AppTaxi\Http\Requests\Request;

class TaxisCreateRequest extends Request
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
            //'marca', 'modelo', 'placa', 'numtax'
            'marca'=>'required',
            'modelo'=>'required',
            'placa'=>'required',
            'numtax'=>'required',




        ];
    }
}
