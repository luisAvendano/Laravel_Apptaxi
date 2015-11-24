<?php

namespace AppTaxi\Http\Controllers;

use Illuminate\Http\Request;
use AppTaxi\Http\Requests;
use AppTaxi\Http\Requests\TaxisCreateRequest;
use AppTaxi\Http\Requests\TaxisUpdateRequest;
use AppTaxi\Http\Controllers\Controller;


use \AppTaxi\Taxis;
use Session;
use Redirect;

class TaxisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$datos_usuarios =DatosUsuario::All();
         //return view('usaurio.index',compact('datos_usuarios'));

         $taxis =Taxis::All();
          return view('taxi.index',compact('taxis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('taxi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaxisCreateRequest $request)
    {
        //'marca', 'modelo', 'placa', 'numtax'

        \AppTaxi\Taxis::create([
            'marca' => $request['marca'],
            'modelo' => $request['modelo'],
            'placa' => $request['placa'],
            'numtax' => $request['numtax'],



            ]);


return redirect ('/taxis')->with('message','Taxi Registrado con Exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $taxis =Taxis::find($id);
        return view('taxi.edit',['taxis'=>$taxis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaxisUpdateRequest $request, $id)
    {
        //
         $taxis=Taxis::find($id);
         $taxis->fill($request->all());
         $taxis->save();
         //Session::flash('message','Usuario Actualizado Correctamente');
         return Redirect::to('/taxis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Taxis::destroy($id);
         Session::flash('message','Usuario Eliminado Correctamente');
         return Redirect::to('/taxis');
    }
}
