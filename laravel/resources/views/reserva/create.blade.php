@extends('layouts.admin')
@section('content')


<div class="col-lg-6">
<h4>Area de Reservaciones</h4>
  @include('alerts.request')

  {!!Form::open(['route'=>'reserva.store','method'=>'POST'])!!}
	@include('reserva.forms.usr')

	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

	{!!Form::close()!!}


</div>
<div class="col-lg-6">
</div>

@endsection
