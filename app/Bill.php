<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_bill','id_bill');
    }
    
    public function customers(){
    	return $this->belongsTo('App\Customer','id_customer','id_bill');
    }
    
}