<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaractSubCat extends Model
{
    //

    protected $fillable=['name','description'];


public function souscategorie()
    {
            return $this->belongsTo(Souscategorie::class);
    }




}
