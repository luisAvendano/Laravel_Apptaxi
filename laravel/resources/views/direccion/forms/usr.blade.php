<div class="form-group">
  {!!Form::label('nombreter','Terminal:')!!}
  {!!Form::text('nombreter',null,['class'=>'form-control','placeholder'=>'Terminal'])!!}

</div>

<div class="form-group">
  {!!Form::label('calle','Calle:')!!}
  {!!Form::text('calle',null,['class'=>'form-control','placeholder'=>'Calle'])!!}

</div>

<div class="form-group">
  {!!Form::label('colonia','Colonia:')!!}
  {!!Form::text('colonia',null,['class'=>'form-control','placeholder'=>'Colonia'])!!}

</div>

<div class="form-group">
    {!!Form::label('numero','Numero:')!!}
    {!!Form::number('numero',null,['class'=>'form-control','placeholder'=>'Numero'])!!}

</div>
<div class="form-group">
  {!!Form::label('cp','Codigo Postal:')!!}
  {!!Form::number('cp',null,['class'=>'form-control','placeholder'=>'Codigo Postal'])!!}

</div>
<div class="form-group ">

  {!!Form::label('tarifa','Tarifa:')!!}<br>
  
  {!!Form::number('tarifa',null,['class'=>'form-control','placeholder'=>'Tarifa'])!!}

</div>
<div class="form-group">
  {!!Form::label('estado','Estado:')!!}
  {!!Form::text('estado',null,['class'=>'form-control','placeholder'=>'Estado'])!!}

</div>
