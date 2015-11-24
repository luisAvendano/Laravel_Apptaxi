<div class="form-group">
  {!!Form::label('nombre','Nombre:')!!}
  {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}

</div>

<div class="form-group">
  {!!Form::label('apellido','Apellidos:')!!}
  {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}

</div>
<div class="form-group">
  {!!Form::label('edad','Edad:')!!}
  {!!Form::number('edad',null,['class'=>'form-control','placeholder'=>'Edad'])!!}

</div>

<div class="form-group">
  {!!Form::label('telefono','Telefono:')!!}
  {!!Form::tel('telefono',null,['class'=>'form-control','placeholder'=>'Telefono'])!!}

</div>

<div class="form-group">
    {!!Form::label('licencia','Licencia:')!!}
    {!!Form::text('licencia',null,['class'=>'form-control','placeholder'=>'licencia'])!!}

</div>
<div class="form-group">
  {!!Form::label('reftax','Numero de taxi:')!!}
  {!!Form::number('reftax',null,['class'=>'form-control','placeholder'=>'Numero de taxi'])!!}

</div>
