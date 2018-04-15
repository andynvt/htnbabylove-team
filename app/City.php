<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";
    public $timestamps = false;
    

    public function districts(){
    	return $this->hasMany('App\District','id_city','id_city');
    }

}
