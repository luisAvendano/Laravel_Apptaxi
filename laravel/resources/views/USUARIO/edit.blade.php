@extends('layouts.admin')
@section('content')
<div class="col-lg-6">


       <div class="form-group">
	@include('alerts.request')
{!!Form::model($datos_usuarios,['route'=>['USUARIO.update',$datos_usuarios],'method'=>'PUT'])!!}
			@include('USUARIO.forms.usr')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['USUARIO.destroy', $datos_usuarios], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminarr',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}




      </div>

      </div>

      <div class="col-lg-6">

        <h1>Actualiza tus Datos</h1>

      </div>
@endsection
