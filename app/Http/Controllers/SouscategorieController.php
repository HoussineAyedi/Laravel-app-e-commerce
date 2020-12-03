<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Souscategorie;
use App\Category;
use App\Product;

class SouscategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // from the table product we are going to take all the products 
        // and we will later store them in a variable called
        // $products 
        // when we are going to return the view and acces to it
        // we will have in our hand the variable passed in the second argument
        
        //called products which will contain the list of our products 
         $categories=Category::pluck('name','id');
         $souscat=Souscategorie::all();
         $products=Product::all();

         return view('admin.souscatcaract',compact(['souscat','categories','products']));
         
          //compact(['product','categories']))
          // this is an array we're passing so an error will appear if we are going to 
          // type simply    compact('souscat','categories'))

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        Souscategorie::create($request->except('_token'));

        /*
            after using @csrf or {!! csrf_field() !!}
            It will generate the _token input field for you, 
        and all should be ok!

        Despite you being using guarded or fillable on your model,
         _token shouldn't get in the way of mass assignment!

*/

        return redirect()->route('souscategorie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idsouscat) //=null
    {       
            // for the moment nothing will be done


        /*

          if(!empty($idsouscat))
        {
            // we are going to pass the cat_id As a parameter
            // and then we will get that specific cat object
            // and then grace a la relation definie precedement
            // que la category has many products we can take the list
            // of the products of that category 
            $products=Category::find($idsouscat)->products;
        }
        $categories=Category::all();
        // here we are willing to get back to our initial page
        // which is the category page and this time we will
        // pass to this same refreshed view the categories and the products 

        
        return view('admin.category.index',compact(['categories','products']));

        */
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
