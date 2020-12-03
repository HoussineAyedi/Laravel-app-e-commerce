<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;

// the last one is to include when it don't compile the Cart Item

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.shipping-info');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    
    // so instead of the normal creation 


    /*public function create()
    {
        //
    }
    */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,

        [
        
            'addressline'=>'required',
            'city'=>'required',
            'zip'=>'required|integer',
            'country'=>'required',
            
        ]);

        Auth::user()->address()->create($request->all());

        // this will create the entry in our table with the user_Id
        // after we store the adress we need now to store the order 
        // and these two things should go Simultaneously with each other
        // here to get the shipping info 
        // here we are going to create this order via the model Order 
        
            Order::createOrder();

         if($request->invisible == 'deliver')
         {
           
           session()->flash('deliversuccess','Merci pour votre confiance en nos services,
           Vous allez recevoir votre commande dans les plus brefs délais');    
            return redirect()->route('home');

           //echo('hello there this page is for deliver only ') ;
         
         }
        
        if($request->invisible == 'pay')
                echo('helle there here put a page for money things and thank u ')  ;      

       



    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
