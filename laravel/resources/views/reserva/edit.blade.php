@extends('layouts.admin')
@section('content')
@include('alerts.request')
{!!Form::model($reserva,['route'=>['reserva.update',$reserva],'method'=>'PUT'])!!}
			@include('reserva.forms.usr')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['reserva.destroy', $reserva], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
@endsection
