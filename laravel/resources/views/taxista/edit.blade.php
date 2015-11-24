@extends('layouts.admin')
@section('content')
@include('alerts.request')
{!!Form::model($taxista,['route'=>['taxista.update',$taxista],'method'=>'PUT'])!!}
			@include('taxista.forms.usr')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['taxista.destroy', $taxista], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
@endsection
