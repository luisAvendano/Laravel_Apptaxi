@extends('layouts.admin')
@section('content')

<div class="col-lg-6">

  <h1>Registra tus datos</h1>

  @include('alerts.request')


  {!!Form::open(['route'=>'USUARIO.store','method'=>'POST'])!!}
	 @include('USUARIO.forms.usr')
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

	{!!Form::close()!!}



</div>

<div class="col-lg-6">

  <h1>Politica de registro-</h1>

  <h4>Registra tus datos para poder realizar una reserva.</h4>


  </div>


@endsection
