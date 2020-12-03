@extends('admin.layout.admin')

@section('content')

    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}
            <!-- this is the name of route will be affected 
                to the variable route 

                the method we are going to get or send data with 
                is going to be POST and the files attribute 
                with the value true will allow us to upload files 
                in this route


                Form stuff are allowed after we installed that package in our system
                or laravel project which is by the command

                ->composer require "laravelcollective/html"
                // After installing that provider we are obliged to 
             // to type this line in the file config/app.php
              Collective\Html\HtmlServiceProvider::class,
                and then we need to close this form via the command Form::close
                so it is like another way to write a form in html laravel -->




            <div class="form-group">
                <!-- Here we are going to create a form 
                    the text field will have as label Name and 
                    the name of the text field doesn't matter now 

                    and then it will have as a class name form-control
                    and this field should be required and not empty and its minumum length is
                    5 characters -->


                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            

            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>
            
         
            <div class="form-group">
                {{ Form::label('price', 'Price') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>
                
                
            <div class="form-group">
                {{ Form::label('Quantité', 'Qauntité') }}
                {{ Form::text('qty', null, array('class' => 'form-control')) }}
            </div>
            

            <div class="form-group">
                {{ Form::label('category_id', 'Categorie') }}
                
                <!-- here to mention that the categories variable will be 
                    replaced by all the categories in it 
                    here I think Null is the default value
                    and here we should as always pass to this create
                    view from our product controller the categories as a second 
                    parameter 
                    So in case I needed to add anything to this create
                    panel then copy the work as it is of products and categories
                    video 7 min 9+ creating an E-comm using laravel -->


                {{ Form::select('category_id', $categories, null, 
                ['class' => 'form-control','placeholder'=>'Select Category']) }}
            </div>

             <div class="form-group">
                {{ Form::label('souscat_id', 'Sous Categorie') }}
                {{ Form::select('souscat_id', $souscat, null, 
                ['class' => 'form-control','placeholder'=>'Select Sous categorie']) }}
            </div>



            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            

            {!! Form::close() !!}

        </div>
    </div>



@endsection