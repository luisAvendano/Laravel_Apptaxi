<?php

namespace AppTaxi\Http\Controllers;

use Illuminate\Http\Request;
use AppTaxi\Http\Requests;
use AppTaxi\Http\Requests\DatoUsarioCreateRequest;
use AppTaxi\Http\Requests\DatoUsarioUpdateRequest;
use AppTaxi\Http\Controllers\Controller;

use \AppTaxi\DatosUsuario;
use Session;
use Redirect;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       //$users=datos_usuarios::paginate(5);
       $datos_usuarios =DatosUsuario::All();
        return view('USUARIO.index',compact('datos_usuarios'));
        //$users=datos_usuarios::paginate(5);
         //return view('usaurio.index',compact('datos_usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('USUARIO.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DatoUsarioCreateRequest $request)
    {

      \AppTaxi\DatosUsuario::create([


          'nombre' => $request['nombre'],
          'apellido' => $request['apellido'],
          'edad' => $request['edad'],
          'correo' => $request['correo'],
          'telefono' => $request['telefono'],
          'genero' => $request['genero'],

      ]);


       return redirect ('/USUARIO')->with('message','Usuario registrado correctamete');
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
         $datos_usuarios =DatosUsuario::find($id);
         return view('USUARIO.edit',['datos_usuarios'=>$datos_usuarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DatoUsarioUpdateRequest $request, $id)
    {
        //
       $datos_usuarios =DatosUsuario::find($id);
        $datos_usuarios->fill($request->all());
        $datos_usuarios->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/USUARIO');
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
      DatosUsuario::destroy($id);
       Session::flash('message','Usuario Eliminado Correctamente');
       return Redirect::to('/USUARIO');
    }
}
