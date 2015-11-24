@extends('layouts.admin')
@section('content')

<div class="row">
                  <div class="col-lg-6">


                      <section class="panel">
                        @include('alerts.request')
                          <h4>Registro de Taxista</h4>
                          {!!Form::open(['route'=>'taxis.store','method'=>'POST'])!!}

                        	 @include('taxi.form.usr')

                        	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

                        	{!!Form::close()!!}
                      </section>




</div>
<div class="col-lg-6">
    <section class="panel">
        <div class="panel-body">Registrar Un Taxi</div>

        <p>
          Para refus
        </p>

    </section>




</div>



</div>




@endsection
