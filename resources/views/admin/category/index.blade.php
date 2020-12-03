@extends('admin.layout.admin')

@section('content')

    <div class="navbar">
        



        <div class="container">
            <div class="row">
                <div class="col-md-8">
        <a class="btn btn-primary " data-toggle="modal" href="#category"
        style="margin-bottom: 10px;">

    Ajouter une Categorie 
    
    </a>

<table class="table">
    <head>
        <tr>
            
        <td> 
        <a class="navbar-brand" href="#" style="float:none;color: #41b743;">
           La listes des Categories
        </a> 
        </td>
        <td style="color: #41b743; font-size: 18px;"> Actions sous la categorie </td>
            

        </tr>
    </head>
        
        

<body>

            <!-- If we have categories in our application 
                it is like the if not condition -->
            @if(!empty($categories))
            <!-- as always we've got this category from the controller 
                he's the one responsible to forward us information from the database
           in addition to what we used to pass as parameters
           this time in the Category controller we also passed the
           products but didn't get them from the model so check
           how is that where it is written 
           compact(['products','categories']) -->
           
            @forelse($categories as $category)
                
                <tr>
                   <td>
                    <!-- here in this page we are going to 
             ask from our controller to invoke this show method
             and the second parameter will be the category ID that will be passed 
             to this method      -->
                    <a href="{{route('category.show',$category->id)}}">
                        {{$category->name}}
                    </a>
                    
                    </td>

                    <td>
                {{-- delete button --}}
                <!--here we passed the id of the category to be deleted -->
                    <form action="{{route('category.destroy',$category->id)}}"  method="POST">
                        <!-- Explination of delete and csrf stuff can be fond 
                            in the Edbrahim Playlist -->        
                
                        {{csrf_field()}}
                        {{method_field('DELETE')}}


                        <input class="btn btn-sm btn-danger" type="submit" value="Supprimer" style="
    margin-bottom: 5px;" >
                     </form>
                    
                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-sm" style="margin-bottom: 5px;">
                            Modifier les informations de cette catégorie
                       </a>


                </td>

           

        </tr> 
         @empty
               <tr><td colspan="2" style="font-size: medium;"> Pas de categories disponibles </td> </tr>
               
                @endforelse
                 @endif

</body>

</table>





    
    
</div>
</div>
</div>
</div>


    <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                    </button>
                    
                    <h4 class="modal-title"> Add New </h4>
               
               </div>
                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                <!--Here after creating the form 
                    these info will be redirected to the method store in our
                    category controller-->
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Title') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('name', 'Description') }}
                        {{ Form::text('description', null, array('class' => 'form-control')) }}
                    </div>


                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                
                {!! Form::close() !!}


            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
   
    

    {{--products--}}

<!--// here we are setting and testing if we invoked the methode show in the CategoriesController
    --> 
    
    @if(isset($products))
    <!--You may ask from where did we got this $products
        then the answer is we passed it from our controller 
        with the compact function -->
    <!-- isset — Détermine si une variable est définie et est différente de NULL -->

    <h3>Products</h3>

    <table class="table table-hover">
    	<thead> <!-- Table Head and Table Body -->
    		<tr>
    			<th>Products</th>
    		</tr>
    	</thead>
    	<tbody>


@forelse($products as $product)
    <tr><td>{{$product->name}}</td></tr>
    	@empty
        
        <!--In case this category has no products -->
        
        <tr><td>no data</td></tr>
        @endforelse

        </tbody>
    </table>
    @endif

@endsection
    
    
    