<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function product_type(){
    	return $this->belongsTo('App\ProductType','id_type','id_product');
    }

    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_product','id_bill_detail');	
    }

    public function promotions(){
    	return $this->hasOne('App\Promotion','id_product','id_product');	
    }

    public function feedbacks(){
    	return $this->belongsToMany('App\Feedback','id_feedback','id_product');	
    }

    public function product_detail(){
    	return $this->hasMany('App\ProductDetail','id_product','id_product');	
    }
}
