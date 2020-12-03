<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','category_id','image','price','qty','souscat_id'];

    // a very important note here that is if we forget one fillable 
    // field in here then an error will be generated 

    public function category()
    {
        
        // we are in the product model and each 
        // product belongs to a certain category 
        return $this->belongsTo(Category::class);

    }

        public function Souscategorie()
    {
        
        // we are in the product model and each 
        // product belongs to a certain category 
        return $this->belongsTo(Souscategorie::class);

    }



    public function images()
    {
    	return $this->hasMany(ProductImage::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    
    public function getStarRating()
    {
        $count = $this->reviews()->count();
        if(empty($count)){
            return 0;
        }
        $starCountSum=$this->reviews()->sum('rating');
        $average=$starCountSum/ $count;

       return $average;

    }

    

}
