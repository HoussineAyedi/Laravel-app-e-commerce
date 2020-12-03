@extends('layout.main')

@section('content')
    <br>
<center>
<div class="row">
    <div class="col-md-12 center">
    
    <div class="small-1 small-centered columns">
        <h3>Informations de Livraison</h3>
        <br>
            <!--This is in the address model that we are going to create later -->

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group" style="width:50%">
            <!--Be carefull of the first argument of the line below about the adresse exacte-->
            <!--About the second line first arg is the name we are going to use in getting data -->
            
            {{ Form::label('Adresse exacte', 'Adresse exacte') }}
            {{ Form::text('addressline', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group"   style="width:50%"  >
            {{ Form::label('city', 'Ville') }}
            {{ Form::text('city', null, array('class' => 'form-control')) }}
        </div>
        
        <div class="form-group"   style="width:50%"  >
            {{ Form::label('zip', 'Code postale') }}
            {{ Form::text('zip', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group"   style="width:50%"  >
            {{ Form::label('country', 'Pays') }}
            {{ Form::text('country', null, array('class' => 'form-control')) }}
        </div>
        {{ Form::hidden('invisible', 'deliver') }}
    

     
        {{ Form::submit('Confirmer la livraison', array('class' => 'button success','style'=>'margin-bottom: 15px;
    background-color: gainsboro;
    border-radius: 16px;
    font-family: cursive;')) }}
        
        {!! Form::close() !!}



    </div>

    </div>
</div>
</center>


@endsection