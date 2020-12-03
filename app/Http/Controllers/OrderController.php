<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{   
    //we will be passing the type variable to check the type of the order
    public function Orders($type='')
    {   // we are going to get the orders where the delivered value is equal to 0 
        if($type =='pending'){
            $orders=Order::where('delivered','0')->get();

        }elseif ($type == 'delivered'){
            $orders=Order::where('delivered','1')->get();
        }else{
            $orders=Order::all();
        }
         // the last thing is that we are going to pass this variable to 
         // the view in the admin panel in which the admin will check the orders
        
        return view('admin.orders',compact('orders'));
    }

    public function toggledeliver(Request $request,$orderId)
    {   
        // first of all we are going to point to the order with its ID 
        $order=Order::find($orderId);
            // if the admin choosed the checkbox and confirmed that the deliver is done 
            // this order column will be updated to 1 

        if($request->has('delivered')){
            
            // $time=Carbon::now()->addMinute(1);
            // Mail::to($order->user)->later($time,new OrderShipped($order));

            $order->delivered=$request->delivered;
        }else{
            $order->delivered="0";
        }
        // finally we are going to store this updated order in our Database
        
        $order->save();
        //and finally we will be redirected to the same page we've been in 
        return back();
    }
}
