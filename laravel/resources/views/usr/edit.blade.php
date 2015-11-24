@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
	<div class="col-lg-6">

		<h4>Reserva tu Viaje</h4>
		{!!Form::model($user,['route'=>['usr.update',$user],'method'=>'PUT'])!!}
			@include('usr.forms.usr1')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['usr.destroy', $user], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}


	</div>
	@endsection
