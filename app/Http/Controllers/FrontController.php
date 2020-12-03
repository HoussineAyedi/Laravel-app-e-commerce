<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products=Product::all();
        $categories=Category::all();
        return view('front.home',compact(['products','categories']));
    }


    public function shirts()
    {
        $shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }

    public function shirt(Product $product)
    {

        return view('front.shirt',compact('product'));
    }



        public function products()
    {   
        $produits=Product::all();
        $categories=Category::all();

        return view('front.products',compact(['categories','produits']) );
        // In case it didn't work we can do the one from the tuto
        // which is compact('produit') simply
        // return view('front.products',array('produits'=>$produits) );

        // Dans la view produit on va avoir cette variable produits
        // qui va contenir la liste de tous les produits
    }                   



        public function about()
    {
        return view('front.about');
    }
    

    public function mailus()
    {
        return view('front.mail-us');
    }



}
