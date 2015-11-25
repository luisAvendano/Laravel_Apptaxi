@extends('layouts.admin')
@section('content')

<div class="panel-body">
  <div class="dataTable_wrapper">

 <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>


                  <th>#</th>
                  <th>Cliente</th>
                  <th>Numero de taxi</th>
                  <th>Origen</th>
                  <th>Terminal</th>
                  <th>Fecha de salida</th>
                  <th>Hora de salida</th>
                  <th>Recepcion</th>
                  <th>Operacion</th>
                </tr>
              </thead>
              @foreach($reserva as $recepcions)
              <tbody>
                <td>#</td>

                <td>{{$recepcions->clientes}}</td>
                <td>{{$recepcions->numtaxi}}</td>
                <td>{{$recepcions->orgen}}</td>
                <td>{{$recepcions->refter}}</td>
                <td>{{$recepcions->fechasal}}</td>
                <td>{{$recepcions->horasal}}</td>
                <td>{{$recepcions->refRepcion}}</td>

                <td>{!!link_to_route('reserva.edit', $title ='Editar', $parameters= $recepcions, $attributes = ['class'=>'btn btn-primary'])!!}</td>
              </tbody>

                   @endforeach
            </table>
          </div>
            </div>
              </div>

@stop
