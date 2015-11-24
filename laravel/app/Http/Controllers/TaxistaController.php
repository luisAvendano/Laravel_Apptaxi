<?php

namespace AppTaxi\Http\Controllers;

use Illuminate\Http\Request;
use AppTaxi\Http\Requests;
use AppTaxi\Http\Requests\DatoTaxistaCreateRequest;
use AppTaxi\Http\Requests\DatoTaxistaUpdateRequest;
use AppTaxi\Http\Controllers\Controller;

use \AppTaxi\DatosTaxi;
use Session;
use Redirect;
class TaxistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $taxista =DatosTaxi::All();
         return view('taxista.index',compact('taxista'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('taxista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(DatoTaxistaCreateRequest $request)
     {
//'nombre', 'apellido', 'edad' ,'telefono', 'licencia','reftax'
       DatosTaxi::create([
           'nombre' => $request['nombre'],
           'apellido' => $request['apellido'],
           'edad' => $request['edad'],
           'telefono' => $request['telefono'],
           'licencia' => $request['licencia'],
           'reftax' => $request['reftax'],

       ]);

       /*return "Usuario registrado";*/
        return redirect ('/taxista')->with('message','Registrado correctamete');


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
        $taxista =DatosTaxi::find($id);
        return view('taxista.edit',['taxista'=>$taxista]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DatoTaxistaUpdateRequest $request, $id)
    {
        //
        $taxista =DatosTaxi::find($id);

         $taxista->fill($request->all());
         $taxista->save();
         //Session::flash('message','Usuario Actualizado Correctamente');
         return Redirect::to('/taxista');
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
        DatosTaxi::destroy($id);
         Session::flash('message','Usuario Eliminado Correctamente');
         return Redirect::to('/taxista');
    }
}
