@extends('layouts.admin')
@section('content')


<div class="panel-body">
  <div class="dataTable_wrapper">
 <div class="table-responsive">
            <table class="table table-striped " >
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Telefono</th>
                  <th>Destino</th>
                  <th>Tipo de servicio</th>
                  <th>Numero de Taxi</th>
                  <th>Operacion</th>

                </tr>
              </thead>


              @foreach($datos_usuarios as $datos_usuario)
              <tbody>
                <td>#</td>
                
                <td>{{$datos_usuario->nombre}}</td>
                <td>{{$datos_usuario->apellido}}</td>
                <td>{{$datos_usuario->edad}}</td>
                <td>{{$datos_usuario->correo}}</td>
                <td>{{$datos_usuario->telefono}}</td>
                <td>{{$datos_usuario->genero}}</td>
                <td>{!!link_to_route('USUARIO.edit', $title ='Editar', $parameters= $datos_usuario, $attributes = ['class'=>'btn btn-primary'])!!}</td>
              </tbody>

                   @endforeach

            </table>
          </div>
          </div>
          </div>
@stop
