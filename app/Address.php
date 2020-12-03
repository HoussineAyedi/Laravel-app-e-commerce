<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

	protected $fillable=['addressline','city','zip','country'];
	
	public function user()
	{

	  return $this->belongsTo(User::class);

	}


}
