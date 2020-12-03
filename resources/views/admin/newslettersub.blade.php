@extends('admin.layout.admin')

@section('content')
   

<!--
    the old bad version 

    <h3>Newsletter Subscribers List </h3>
    <hr>

    <ul>
        @foreach($allnews as $news)
            <li>
                    
                        {{$news->email}}
                
            </li>

        @endforeach

    </ul>
-->

    <div class="container">
  <div class="row">
    <div class="col-md-8">

  

  <h2> La liste des inscrits dans notre Newsletters </h2>




<table class="table">
    <head>
      <tr>
        <td> 
            <b>   
                     Email de l'inscrit  
            
        </td>
        
      </tr>
    </head>


    <body>
      @forelse($allnews as $news)
      
      <tr>

        <td>
            {{$news->email}}
        </td>

    

      </tr>

      @empty
        <h3>  
             Il y a pas encore d'inscription dans nos newsletter 
        </h3>

      @endforelse


<tr>

        <td>
       
       
         <form action="#"  method="POST">
           <!--
        here we are going later to set a route which is a controller 
        in which we will load all the subscribers and then we will 
        loop them to send them one by one an email 
           --> 
           {{csrf_field()}}
           
           <input type="text" name="message" placeholder=" Message à envoyer " required="">

           <input class="btn btn-sm btn-danger" type="submit" value="Enoyer une nouveauté aux inscrits ">

         </form>


        </td>

    

      </tr>


    </body>






    </div>
  </div>
</div>








@endsection
