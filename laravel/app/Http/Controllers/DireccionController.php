<?php

namespace AppTaxi\Http\Controllers;

use Illuminate\Http\Request;
use AppTaxi\Http\Requests;
use AppTaxi\Http\Controllers\Controller;

use \AppTaxi\Destino;
use Session;
use Redirect;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $terminal =Destino::All();
         return view('direccion.index',compact('terminal'));
         //$taxes =Taxis::All();
          //return view('taxi.index',compact('taxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('direccion.create');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //    protected $fillable = ['nombreter', 'calle', 'colonia', 'numero','cp','tarifa','estado'];


        \AppTaxi\Destino::create([
            'nombreter' => $request['nombreter'],
            'calle' => $request['calle'],
            'colonia' => $request['colonia'],
            'numero' => $request['numero'],
            'cp' => $request['cp'],
            'tarifa' => $request['tarifa'],
            'estado' => $request['estado'],


            ]);


return redirect ('/dirrecion')->with('message','Datos Guardados Exitosamente');


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

      //  $taxes =Taxis::find($id);
      //  return view('taxi.edit',['taxes'=>$taxes]);

      //$terminal = Destino::find($id);
      //return view('direccion.edit',['terminal'=>$terminal]);
      $terminal =Destino::find($id);
      return view('direccion.edit',['terminal'=>$terminal]);




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $terminal=Destino::find($id);
        $terminal->fill($request->all());
        $terminal->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/dirrecion');
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
         Destino::destroy($id);
         Session::flash('message','Usuario Eliminado Correctamente');
         return Redirect::to('/dirrecion');
    }
}
