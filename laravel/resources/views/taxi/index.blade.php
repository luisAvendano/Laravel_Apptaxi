@extends('layouts.admin')
@section('content')


<div class="panel-body">
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{Session::get('message')}}
</div>
@endif
  <div class="dataTable_wrapper">
 <div class="table-responsive">
            <table class="table table-striped  ">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Placa</th>

                  <th>Numero de Taxi</th>
                  <th>Operacion</th>


                </tr>
              </thead>

              @foreach($taxis as $taxe)
              <tbody>
                <td>#</td>
                <td>{{$taxe->marca}}</td>
                <td>{{$taxe->modelo}}</td>
                <td>{{$taxe->placa}}</td>
                <td>{{$taxe->numtax}}</td>

                <td>{!!link_to_route('taxis.edit', $title ='Editar', $parameters= $taxe, $attributes = ['class'=>'btn btn-primary'])!!}</td>
              </tbody>

                   @endforeach


            </table>
          </div>
          </div>
          </div>
@stop
