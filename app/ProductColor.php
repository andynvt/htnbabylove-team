<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $table = "product_color";
    public $timestamps = false;

    public function product_detail(){
    	return $this->belongsTo('App\ProductDetail','id_detail','id_color');
    }
}
