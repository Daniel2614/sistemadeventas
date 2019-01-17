<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicEsco extends Model
{
    protected $table = 'evaluacion_licenciaturas_escolarizado';

    protected $fillable = [

    	'id',
    	'clave',
    	'nombre',
    	

	];
}
