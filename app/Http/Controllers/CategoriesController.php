<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        $products=Product::all();

        // as always when you get data from a model don't forget
        // to use them via the command
        // use App\Category;
        // use App\Product;
        return view('admin.category.index',compact(['categories','products']));
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
        //So the form sent data to this controller and
        // more specifically to this method
        //We will get all the data from that from 
        //And they are going to be in a form of variable called as knows $request
        // that has all the fields from the form which is only one (name)
        //And all we have in the categorie model is name so that's ok 
        // It will be simply call the consctuctor with the name 
        Category::create($request->all());
        // This back function is like to keep us in our index page where we came from 
        // cause the form is a popped window and nothing else 
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    public function show($categoryId=null)
    {
        if(!empty($categoryId)){
            // we are going to pass the cat_id As a parameter
            // and then we will get that specific cat object
            // and then grace a la relation definie precedement
            // que la category has many products we can take the list
            // of the products of that category 
            $products=Category::find($categoryId)->products;
        }
        $categories=Category::all();
        // here we are willing to get back to our initial page
        // which is the category page and this time we will
        // pass to this same refreshed view the categories and the products 

        
        return view('admin.category.index',compact(['categories','products']));

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
         $cat=Product::find($id);
        return view('admin.category.edit',compact('cat'));
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
        //If he didn't do it in this playlist then I will do it my own
        $cat=Category::find($id);
        $cat->update($request);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->products()->delete();
        $category->delete();
        return back();
    }

    // this is my edit one 

    public function filter($categoryId)
    {
        /*

        $category=Category::find($id);

        $categories=Category::all();
        
        $produits=$category->products();

        dd($produits);

        return view('front.category',compact('produits'));
        
        */


        if(!empty($categoryId))
        {
            // we are going to pass the cat_id As a parameter
            // and then we will get that specific cat object
            // and then grace a la relation definie precedement
            // que la category has many products we can take the list
            // of the products of that category 
            $produits=Category::find($categoryId)->products;
           
        }

       // $categories=Category::all();
        // here we are willing to get back to our initial page
        // which is the category page and this time we will
        // pass to this same refreshed view the categories and the products 

        
        return view('front.category',compact('produits'));



    }

}
