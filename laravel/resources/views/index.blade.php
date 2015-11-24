@extends('layouts.principal')
@section('content')





<div class="col-sm-6">
  <article class="">

    <div class="jumbotron">
      <h1>Informacion</h1>
      <p>Nosotros como empresa tenemos la respnsabilidad de brindar un servicio de calidad en transporte</p>
      <p>
        <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">MAS &raquo;</a>
      </p>



  </article>
</div>
<div class="col-sm-6">
  @include('alerts.errors')
  @include('alerts.request')
  <div class="header">

    <div class="top-header">

      <div class="logo">

        <a href="Index.html"><img scr=""></a>
        <p>
        <!--h1>  Inicia con AppTax!</h1-->
        </p>



      </div>

      <div class="clearfix"> </div>

    </div>

    <div class="header-info">
      <h1>AppTax! Login</h1>
      {!!Form::open(['route'=>'log.store','method'=>'POST'])!!}
      <div class="form-group">
        {!!Form::label('correo','Correo:')!!}
        {!!Form::email('email',null,['class'=>'form-control',
        'placeholder'=>'Ingresa tu correo'])!!}

      </div>
      <div class="form-group">
        {!!Form::label('contasena','Contrasena:')!!}
        {!!Form::password('password',['class'=>'form-control',
        'placeholder'=>'Ingresa tu Contrasena'])!!}
      </div>


      {!!Form::submit('iniciar',['class'=>'btn btn-primary'])!!}
      {!!form::close()!!}


    </div>

  </div>
</div>

<div class="col-lg-12">

</div>




@stop
