<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public function empresa(){
    	return $this->belongsTo('App\Empresa');
    }
}
