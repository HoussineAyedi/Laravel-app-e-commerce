<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;// to make sure that the auth class is imported 
use Gloudemans\Shoppingcart\Facades\Cart;

class Order extends Model
{
    // about the relationships here we have a many to many relationship 
    // between orders and products
    // so a product exist in many orders and an order can contain many products
	// so the idea here is to create a table between them 
	// which will be in our case order_product table

	protected $fillable=['total','delivered'];
	//the total column in the database table is set to varchar(60000)
	// cause while creating the order a problem happened 
	//we are obliged to name the function as the class we're going to work with 

	public function user()
	{
			return $this->belongsTo(User::class);
	}


	public function orderItems()
	{
		// the with pivot function we need to specify the columns added to the 
		//default primary keys of boths models porduct and model in our case here 
		// we can find these two columns in the table that link these two models 
		// which is the table called order_product and we are defining things
		// in the order model as said in the video 12 of creating E-commerce website
		return $this->belongsToMany(Product::class)->withPivot('total','qty');
	}

	public static function createOrder ()
	{
			// this method is to create the order 
            $user=Auth::user();// here to get the user info and store it in the $user variable
            $order=$user->orders()->create([
                    'total'=>Cart::total(),
                    'delivered' =>0

            ]);
            // the delivered column will get by default the value zero which means that this order
            // is not delivered yet 

            $cartItems=cart::content();
            //seek for intels about attach function 

            foreach($cartItems as $cartItem)
                $order->orderItems()->attach($cartItem->id,[
                    'qty'=>$cartItem->qty ,
                    'total' => $cartItem->qty*$cartItem->price     
                        ]);

	}



}
