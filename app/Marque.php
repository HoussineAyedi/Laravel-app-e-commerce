<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    // ce modele est dedié au marque des produits 


// une marque has many products

protected $fillable=['nomdelamarque'];
	
	public function product()

	{
		return $this->hasMany(Product::class);

	}


}
