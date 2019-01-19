<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatMaterias extends Model
{
    protected $table = 'evaluacion_materiasesco';

    protected $fillable = [

    	'id',
    	'semestre',
    	'clave',
    	'materia',
    	

	];
}
