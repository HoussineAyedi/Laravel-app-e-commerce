@extends('admin.layout.admin')

@section('content')





<div class="container">
  <div class="row">
    <div class="col-md-8">

  

  <h2> Liste des produits </h2>




<table class="table">
    <head>
      <tr>
        <td> <b>   <h6>Nom de produit </b></h6></td>
        <td>   <b> <h6>Categorie </b>   </h6></td>
        <td>   <b><h6>  Date d'ajout </b>  </h6> </td>
        <td>   <b><h6>  Quantité </b>  </h6> </td>

        <td>   <b> <h6>Actions </b> </h6>  </td>

      </tr>
    </head>


    <body>
      @forelse($products as $product)
      
      <tr>

        <td>
            {{$product->name}}
        </td>

        <td>
          {{$product->category->name}} 
          {{$product->souscategorie}}
        
        </td>
    
        <td>
          {{$product->created_at}}

        </td>
        
        <td>
          {{$product->qty}}

        </td>


      <td>

         <form action="{{route('product.destroy',$product->id)}}"  method="POST">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-sm btn-danger" type="submit" value="Supprimer" style="margin-bottom: 5px;">
         </form>
          <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm" style="margin-bottom: 5px;">
                            Modifier les informations du produit
                       </a>
         

          
             </form>
            <br>
            <b>  Image de produit </b>
             <br>

           
              <img src="{{url('images',$product->image)}}" alt="" style="width:150px;height: 150px; ">
 



           

             @foreach ($product->images as $image)
          
          <img src="{{$image->image_path}}" style="max-width: 100px">
  
        @endforeach

 
             

      </td>

      </tr>

      @empty
        <h3>   No products are available now </h3>
      @endforelse
    </body>






    </div>
  </div>
</div>



@endsection