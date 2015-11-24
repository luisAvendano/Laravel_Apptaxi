@extends('layouts.admin')
@section('content')
       <div class="form-group">






{!!Form::model($destinos,['route'=>['dirrecion.update',$destinos],'method'=>'PUT'])!!}
			@include('direccion.form.usr')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['dirrecion.destroy',$destinos], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-info'])!!}
		{!!Form::close()!!}




      </div>
@endsection
