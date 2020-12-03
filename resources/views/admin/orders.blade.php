@extends('admin.layout.admin')
@section('content')
    <h3>
        Commandes
    </h3>
    
    <hr>

    <ul>
        @forelse($orders as $order)
            <li>
                <h4>Commande de : {{$order->user->name}} <br> Prix Total : {{$order->total}}</h4>

                <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle" style="float: none!important;">
                    {{csrf_field()}}

                    <center>
                    <label for="delivered">Livré</label>
                    <!--If this order delivered is checked which means equal to 1 we will put it as checked 
                        otherways it will be with its default NULL value -->
                    <input type="checkbox" value="1" name="delivered"  {{$order->delivered==1?"checked":"" }}>
                    <input type="submit" value="Confirmer">
                    </center>

                </form>

                <div class="clearfix"></div>
                <hr>
                <h5>Produit</h5>
                <table class="table table-bordered">
                    <tr>
                        <th style="text-align: center;">Nom de produit</th>
                        <th style="text-align: center;">quantité</th>
                        <th style="text-align: center;">prix</th>
                    </tr>
                    @forelse($order->orderItems as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->pivot->qty}}</td>
                            <td>{{$item->pivot->total}}</td>
                        </tr>
                         @empty
                            <tr>
                                 <td>Pas de commande disponible ICI </td>
                            </tr>
                    @endforelse

                   

                </table>
            </li>

           
        @empty 
        <h3> Pas de commandes disponible ICI !! </h3>   
        
        @endforelse

    </ul>
@endsection

