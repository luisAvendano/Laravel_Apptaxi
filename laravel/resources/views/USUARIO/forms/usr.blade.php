

<div class="form-group">

  {!!Form::label('nombre','Nombre:')!!}
  {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Luis Enrique'])!!}

</div>

<div class="form-group">

  {!!Form::label('apellido','Apellidos:')!!}
  {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Avendaño Sandoval'])!!}

</div>

<div class="form-group">

  {!!Form::label('edad','Edad:')!!}
  {!!Form::number('edad',null,['class'=>'form-control','placeholder'=>'20'])!!}

</div>

<div class="form-group">
    {!!Form::label('correo','Correo Electronico:')!!}
    {!!Form::text('correo',null,['class'=>'form-control','placeholder'=>'luisavendano01@gmail.com'])!!}

</div>
<div class="form-group">
  {!!Form::label('telefono','Telefono:')!!}
  {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'9531325600'])!!}

</div>

<div class="form-group">
  {!!Form::label('genero','Sexo:')!!}
  {!!Form::text('genero',null,['class'=>'form-control','placeholder'=>'M/F/MASCULINO/FEMENINO'])!!}

</div>
