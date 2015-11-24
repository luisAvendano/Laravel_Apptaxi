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
                  <th>Terminal</th>
                  <th>Calle</th>
                  <th>Colonia</th>
                  <th>Numero</th>
                  <th>Codigo Postal</th>
                  <th>Tarifa</th>
                  <th>estado</th>
                  <th>Operacion</th>


                </tr>
              </thead>



              @foreach($terminal as $terminals)
              <tbody>
                <td>#</td>
                <td>{{$terminals->nombreter}}</td>
                <td>{{$terminals->calle}}</td>
                <td>{{$terminals->colonia}}</td>
                <td>{{$terminals->numero}}</td>
                <td>{{$terminals->cp}}</td>
                <td>{{$terminals->tarifa}}</td>
                <td>{{$terminals->estado}}</td>

                <td>{!!link_to_route('dirrecion.edit', $title ='Editar', $parameters= $terminals, $attributes = ['class'=>'btn btn-primary'])!!}</td>

              </tbody>

                   @endforeach


            </table>
          </div>
          </div>
          </div>
@stop
