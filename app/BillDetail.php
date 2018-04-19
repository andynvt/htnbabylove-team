<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    public function product_detail(){
    	return $this->belongsToMany('App\ProductDetail','id_detail','id');
    }

    public function bills(){
    	return $this->belongsTo('App\Bill','id_bill','id');
    }
    
}
