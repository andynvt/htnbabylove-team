<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedbacks";

    public function products(){
    	return $this->hasOne('App\Product','id_feedback','id_feedback');
    }
}
    
}
