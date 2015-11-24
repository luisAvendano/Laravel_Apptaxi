@extends('layouts.admin')
@section('content')


  {!!Form::open(['route'=>'dirrecion.store','method'=>'POST'])!!}
  @include('direccion.forms.usr')
  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

 {!!Form::close()!!}







@endsection
