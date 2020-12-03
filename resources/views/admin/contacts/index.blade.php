@extends('admin.layout.admin')

@section('content')





<div class="container">
  <div class="row">
    <div class="col-md-9">

  

  <h2> La liste des messages </h2>




<table class="table">
    <head>
      <tr>
        <td> <b>   <h6>Nom de la personne </b></h6></td>
        <td>   <b> <h6>Téléphone</b>   </h6></td>
        <td>   <b><h6>  Message </b>  </h6> </td>
        



        <td>   <b> <h6>Mail du contact</b> </h6>  </td>
      <td>   <b> <h6>Action </b> </h6>  </td>
      </tr>
    </head>


    <body>
      @forelse($contacts as $contact)
      
      <tr>

        <td>
            {{$contact->nom}}
        </td>

        <td>
          {{$contact->phone}} 
         
        
        </td>
    
        <td>
          {{$contact->message}}

        </td>
        
      


      <td>

  {{$contact->email}}
 
      </td>


      <td>
       
       
         <form action="#"  method="POST">
           <!--
        here we are going later to set a route which is a controller 
        in which we will load all the subscribers and then we will 
        loop them to send them one by one an email 
           --> 
           {{csrf_field()}}
           
           <input type="text" name="message" placeholder=" Message à envoyer " required="">

           <input class="btn btn-sm btn-danger" type="submit" value="Envoyer ">

         </form>


        </td>



      </tr>

      @empty
        <h3>   Pas de messages pour l'instant </h3>
      @endforelse
  </body>

    </div>
  </div>
</div>



@endsection