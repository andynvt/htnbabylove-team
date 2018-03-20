<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = "promotions";

    public function products(){
    	return $this->belongsTo('App\Product','id_product','id_promotion');
    }
}
