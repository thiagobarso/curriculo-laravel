<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model {

   public $table = 'empresa';

   public function cargos(){
   		return $this->hasMany('App\Cargo');
   }
}
