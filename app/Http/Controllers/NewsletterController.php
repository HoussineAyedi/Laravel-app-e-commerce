<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{
    


    public function savenewsletter(Request $request)

    {

    		$element = new Newsletter();
    		$element->email=$request->input('email');
    		$element->save();

    		session()->flash('newsletterok','Merci pour nous faire confiance
    		 en abonnant à notre newsletter');

			//  the line below is just to test the good functionality of this controller

    		     return redirect()->route('home');


    }


    public function admin()

    {
    	$allnews=Newsletter::all();
    	
    	return view('admin.newslettersub',compact('allnews'));


    }


}
