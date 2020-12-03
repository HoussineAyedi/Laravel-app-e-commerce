<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Souscategorie extends Model
{
	// here I have changed manually the name so in case 
	//of error the source is very known to me


    protected $fillable=['nom','description','category_id'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }


    public function caractsubcats()
    {

    		return $this->hasMany(CaractSubCat::class);
    }

    public function products()
    {
            return $this->hasMany(Product::class);
    }

}
