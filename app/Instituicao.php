<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
	public $table = 'instituicao';

    public function cursos(){
    	return $this->hasMany('App\Curso');
    }
}
