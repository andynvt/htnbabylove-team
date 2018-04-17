<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = "product_image";
    public $timestamps = false;

    public function product_detail(){
    	return $this->belongsTo('App\ProductDetail','id_detail','id_image');
    }

}
