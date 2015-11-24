@extends('layouts.admin')
@section('content')

<div class="panel-body">
  <div class="dataTable_wrapper">

 <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Edad</th>
                  <th>Telefono</th>
                  <th>Licencia</th>
                  <th>reftax</th>
                </tr>
              </thead>
              @foreach($taxista as $datos_taxi)
              <tbody>
                <td>#</td>

                <td>{{$datos_taxi->nombre}}</td>
                <td>{{$datos_taxi->apellido}}</td>
                <td>{{$datos_taxi->edad}}</td>
                <td>{{$datos_taxi->telefono}}</td>
                <td>{{$datos_taxi->licencia}}</td>
                <td>{{$datos_taxi->reftax}}</td>
                <td>{!!link_to_route('taxista.edit', $title ='Editar', $parameters= $datos_taxi, $attributes = ['class'=>'btn btn-primary'])!!}</td>
              </tbody>

                   @endforeach
            </table>
          </div>
            </div>
              </div>

@stop
