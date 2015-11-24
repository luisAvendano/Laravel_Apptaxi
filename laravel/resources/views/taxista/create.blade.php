@extends('layouts.admin')
@section('content')


<div class="col-lg-6">
  @include('alerts.request')

  {!!Form::open(['route'=>'taxista.store','method'=>'POST'])!!}
	@include('taxista.forms.usr')

	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

	{!!Form::close()!!}


</div>

@endsection
