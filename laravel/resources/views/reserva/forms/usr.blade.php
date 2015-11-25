
<div class="form-group">
  {!!Form::label('clientes','Cliente:')!!}
  {!!Form::text('clientes',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}

</div>

<div class="form-group">
  {!!Form::label('numtaxi','Numero de taxi:')!!}
  {!!Form::number('numtaxi',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}

</div>


<div class="form-group">
  {!!Form::label('orgen','Origen:')!!}
  {!!Form::text('orgen',null,['class'=>'form-control','placeholder'=>'Telefono'])!!}

</div>
<div class="form-group">
  {!!Form::label('refter','Terminal:')!!}
  {!!Form::number('refter',null,['class'=>'form-control','placeholder'=>'Edad'])!!}

</div>

<div class="form-group">
    {!!Form::label('fechasal','Fecha de Salida')!!}
    {!!Form::date('fechasal',null,['class'=>'form-control','placeholder'=>'CURP'])!!}

</div>
<div class="form-group">
    {!!Form::label('horasal','Hora de Salida:')!!}
    {!!Form::time('horasal',null,['class'=>'form-control','placeholder'=>'CURP'])!!}

</div>
<div class="form-group">
    {!!Form::label('refRepcion','Recepcion:')!!}
    {!!Form::number('refRepcion',null,['class'=>'form-control','placeholder'=>'CURP'])!!}

</div>
