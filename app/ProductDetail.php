<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = "product_detail";
    public $timestamps = false;
    

    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_detail','id_detail');
    }
    
    public function products(){
    	return $this->belongsTo('App\Product','id_product','id_detail');
    }
}
