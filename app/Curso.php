<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	public $table = 'curso';

    public function empresa(){
    	return $this->belongsTo('App\Instituicao','instituicao_id');
    }
}
