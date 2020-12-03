<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    



        public function index()

        {
        
                $contacts=Contact::all();
                return view('admin.contacts.index',compact('contacts'));
        
        }

	public function save(Request $request)
	{
			/*
			the validation below cannot really control things
			so that's why I am not going to use it 
			cause if the validation is not going to work
			then the page will just refresh itsel and that's all 

			$this->validate($request,[
            'nom'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'min:5|max:1000'

        ]);*/
			
        	$msg= new Contact();
        	$msg->nom=$request->input('nom');
        	$msg->email=$request->input('email');
        	$msg->phone=$request->input('phone');
        	$msg->message=$request->input('message');

        	$msg->save();
        	// the first argument in the name of the variable and 
        	// the second one is the message and the value of that variable

        	session()->flash('success','Merci pour votre message on va vous répondre dans les plus brefs délais');

        	return redirect()->route('contact');
				

		 // return	$request->all();
			 

			
        // Let's now create an new object with the 
        // return redirect()->route('products');
        // We will be redirected to the route named
        // admin.index

		
	
	}


}
