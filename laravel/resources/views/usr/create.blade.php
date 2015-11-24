@extends('layouts.admin')
	@section('content')




<div class="col-lg-6">
@include('alerts.request')
	<h4>Crea tu cuenta</h4>


	{!!Form::open(['route'=>'usr.store', 'method'=>'POST'])!!}
		@include('usr.forms.usr1')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection


</div>
