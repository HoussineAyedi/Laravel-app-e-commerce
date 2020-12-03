<?php

namespace App\Http\Controllers;

use App\Product;
// it is always mondatary to import the package by typing the line above to use the Cart methods
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   // here we will get the items from the cart (The Wishlist) 
        $cartItems=Cart::content();
        // here we will pass to the view the data from not the model this time but from the cart package 
        // we will be able to take things from Content which is a method in the cart package
        // the defined structure of what we've included
        // that we will be able to treat these data later 
        
        return view('cart.index',compact('cartItems'));
        
        // this index page is dedicated to print us all the cart items 
        // in the view index after we pass to it all of our cart Items 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // In order to add a product to our Cart we will need the methode above create 
    //  
    public function create()
    {
            
            // $product=Product::find($productId);
            // to be able to use the product model 
            // we must include this model via command above
            // called use App\Product
            //Cart::add($productId,$product->name(),1,$product->price(),$product->size());
            
            /*The add() method will return a CartItem instance of the item you just added to the cart
            Maybe you prefer to add the item using an array? As long as the array contains the required keys, you can pass it to the method. The options key is optional.
            
            Cart::add(['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'options' => ['size' => 'large']]);

            */

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // Edit the infor the product in the cart 


  
    }






    public function addItem($id)
    {
        $product=Product::find($id);

        Cart::add($id,$product->name,1,$product->price,['size'=>'medium']);

        return back();
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
         // to update the cart with the real number of the items in the form
//        dd(Cart::content()); this is a function to show the structure detailed
//        dd($request->all());
        Cart::update($id,['qty'=>$request->qty,"options"=>['size'=>$request->size]]);
        return back();
        // here we used options in two " " because it is an array of option so we can add as 
        // much as we can the size is coming from our form


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
