@extends('layout.main')

@section('content')
    <br>
<center>
<div class="row ">
    <div class="col-md-12 ">
    
    <div class="small-1 small-centered columns">
        <h3>Shipping Info</h3>
        <br>
            <!--This is in the address model that we are going to create later -->

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group">
            <!--Be carefull of the first argument of the line below about the adresse exacte-->
            <!--About the second line first arg is the name we are going to use in getting data -->

            {{ Form::label('Adresse exacte', 'Adresse exacte') }}
            {{ Form::text('addressline', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'Ville') }}
            {{ Form::text('city', null, array('class' => 'form-control')) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('zip', 'Code postale') }}
            {{ Form::text('zip', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('country', 'Pays') }}
            {{ Form::text('country', null, array('class' => 'form-control')) }}
        </div>
       {{ Form::hidden('invisible', 'pay') }}

        {{ Form::submit('Proceder au payement ', array('class' => 'button success')) }}
        
        {!! Form::close() !!}
    </div>

    </div>
</div>
</center>

<br>

@endsection