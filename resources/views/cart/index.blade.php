@extends('layout.main')

@section('content')
    
    
    <br>

    <div class="row">
        
        <div class="col-md-12">

        <center>
            <h3> Cart Items</h3>
        </center>
                     <br>

        <table class="table table-hover" style="color:black;">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>quantité</th>
              

                <th>Actions</th>
            </tr>

            </thead>
           
            <tbody>
            @foreach($cartItems as $cartItem)
               
                    <!-- A table with two rows and that's all and as we can remid you 
                        that this cartitem data is passed through the 
                        cart controller to this view 

                        for each cart Item I am going to show its specification in this index page -->
                <tr style="color: black">
                    
                <!--
                    If we want to configure anything about this tax
             we need to go to this file and configure it    C:\xampp\htdocs\finalfinal\vendor\gloudemans\shoppingcart\config
             -->
                    <td style="color: black">
                        <!-- Data number 1 for the name-->
                        {{$cartItem->name}}
                    </td>
                    <td style="color: black">
                        <!-- Data number 2 for the quantity-->
                        {{$cartItem->price}}
                    </td>
                    
                    <td style="color: black">
                            <!-- Data number 3 for the the quantity that 
                                we have the hand to change it -->

                        <!--This form is usefull because with it 
                            we can update the quantity of an item at anytime-->

                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <!--Here we needed to update the name of the input 
                            so that when we get back to our controller we can get 
                            the input value 
                        -->
                        
                         <input name="qty" type="text" value="{{$cartItem->qty}}">
                         <!--  
                          <input type="submit" class="btn btn-sm btn-default" value="Ok">
                          {!! Form::close() !!}
                            -->
                    </td>
                    
                   
                    
                    
                        <!--

                    <td width="50px">
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">
                    </td>
                    <td>
                        <div >
						
                        Here we are going to test whether option has size or no if so we will 
						show these options in the cartItem otherwise we will do nothing which is here :'' the other option
						
                        {!! Form::select('size', ['small'=>'Small','medium'=>'Medium','large'=>'Large'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
                        
                        </div>
                                input style="float: left"  type="submit" class="button success small" value="Ok">
                        {!! Form::close() !!}
                    </td>
                    -->
                    <td style="color: black">
                        <input style="float: left;width: 100%;"  type="submit" class="button success small" value="Mettre à jour">
                        {!! Form::close() !!}
                        
                        <!-- Data number 5 for the actions -->

                        

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small" type="submit" value="Supprimer"style="width: 100%;">
                         </form>
                    </td>


                        

                </tr>
            @endforeach


<!-- This added row is to print in fact the tax and other things related to our cart -->
            <tr>
                <td></td>
                
                <td style="color: black">
                    Valeur de la taxe : {{Cart::tax()}}  Dinars
                    <br>
                    Total sans taxe:  {{Cart::subtotal()}} Dinars
                    <!--All of these values are predefined in the package
                        we've installed -->
                    <br>
                    Total avec taxe : {{Cart::total()}}  Dinars
                
                </td>
                
                <td style="color: black">
                <td >
                    Items: {{Cart::count()}}   Pièces
                </td>
                
                <td></td>
                <td></td>

            </tr>

             

            </tbody>
        </table>

   


    </div>

</div>
            
                

          
<center>

 <form action='choix' method="POST">
    
  {{csrf_field()}}
<div class="form-group"> 

  <fieldset class="form-group">
    
    <legend>
        Choississez le mode que vous voulez procéder avec 
    </legend>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="deliver" >
       Payement à la livraison
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="pay">
       Payement à distance 
      </label>
    </div>
    <div class="form-check ">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="book" >
       Réservation pour payer dans la boutique 
      </label>
    </div>
  </fieldset>




  

 
 <div class="form-control-group controls">
        <label class="control-label" for="message">
         
       
            Accepter nos  
            <a href="{{url('oldwebsite.com')}}">
                régles
            </a>
        <input id="agree" class="checkbox" type="checkbox" name="agree" required>

 </label>
</div>

<br>

  
    <button type="submit" class="btn btn-primary">
        Soumettre mon choix 
    </button>

</div>



</form>



</center>



@endsection