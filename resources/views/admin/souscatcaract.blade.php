@extends('admin.layout.admin')

@section('content')






<table class="table">
    <head>
        <tr>
            
        <td> 
        <a class="navbar-brand" href="#" style="float:none;color: #41b743;">
           La listes des Sous-Categories
        </a> 
        </td>
        <td style="color: #41b743; font-size: 18px;"> Actions sous la sous-categorie </td>
            

        </tr>
    </head>

    <body>
 <!-- If we have categories in our application 
                it is like the if not condition -->
            @if(!empty($souscat))
            <!-- as always we've got this categorie from the controller 
                he's the one responsible to forward us information from the database
           in addition to what we used to pass as parameters
           this time in the Category controller we also passed the
           products but didn't get them from the model so check
           how is that where it is written 
           compact(['products','categories']) -->
           
            @forelse($souscat as $item)
                
                <tr>
                   <td> <!-- here in this page we are going to 
             ask from our controller to invoke this show method
             and the second parameter will be the category ID that will be passe 
             to this method      -->
                    <a href="#">
                        {{$item->nom}}
                    </a>
                    
                    </td>

                    <td>
                {{-- delete button --}}
                <!--here we passed the id of the category to be deleted -->
                    <form action="#"  method="POST">
                        <!-- Explination of delete and csrf stuff can be fond 
                            in the Edbrahim Playlist -->        
                
                        {{csrf_field()}}
                        {{method_field('DELETE')}}


                        <input class="btn btn-sm btn-danger" type="submit" value="Supprimer" style="
    margin-bottom: 5px;" >
                     </form>
                    
                            <a href="#" class="btn btn-primary btn-sm" style="margin-bottom: 5px;">
                            Modifier les informations de cette sous-catégorie
                       </a>


                </td>

           

        </tr> 
         @empty
               <tr><td colspan="2" style="font-size: medium;"> Pas de sous-categories disponibles </td> </tr>
               
                @endforelse
                 @endif


</body>
</table>


    

   




 <h3> Ajouter une Sous-Catégorie </h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            {!! Form::open(['route' => 'souscategorie.store', 'method' => 'POST',  'data-parsley-validate'=>'']) !!}



            {!! csrf_field() !!}




            <div class="form-group">


                {{ Form::label('nom', 'Name') }}
                {{ Form::text('nom', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            

            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>
            

            <div class="form-group">
                {{ Form::label('category_id', 'Categorie') }}
                
                {{ Form::select('category_id', $categories, null, 
                ['class' => 'form-control','placeholder'=>'Select Category']) }}
            </div>

         

             {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            

            {!! Form::close() !!}

        </div>
    </div>






@endsection