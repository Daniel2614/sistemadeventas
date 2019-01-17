<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GruposEsco extends Model
{
    protected $table = 'evaluacion_grupos';

    protected $fillable = [

    	'id',
    	'grupo',
    	

	];

	// public function setPaisAttribute($value){
 //         $this->attributes[''] = mb_strtoupper($value, 'UTF-8');
 //    }
}
