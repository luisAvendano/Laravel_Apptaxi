@extends('layouts.admin')
@section('content')
       <div class="form-group">
         @include('alerts.request')

{!!Form::model($taxis,['route'=>['taxis.update',$taxis],'method'=>'PUT'])!!}
			@include('taxi.form.usr')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['taxis.destroy',$taxis], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}




      </div>
@endsection
