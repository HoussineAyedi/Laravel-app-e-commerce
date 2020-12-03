<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //


    protected $fillable=['name','description'];
    

    public function products()
    {	
    	// a simple comment 
    	// we are in the category model so this model 
    	//contains many products 

    	// also we need to define the fillable 
    	// content those we putted in the migration file
    
    	
    	// since we are going to use a lot  of forms we will
    // require and type this command in our cmd

    // composer require "laravelcollective/html"
    	
    	//return $this->hasMany('App\Product');


    	// We can also write this in order to refer to the product 
        // IN case of any problem just leave the one above
    	return $this->hasMany(Product::class);



    }

    public function souscategories()
    {
            return $this->hasMany(Souscategorie::class);
    }




}


