<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     public $table = 'sistemadeventa_cliente';
     
      protected $fillable = [
    	//'id',
    	'nombre',
    	'apellidop',
    	'apellidom',
    	'rfc',
    	'cp',
    	'ciudad',
    	'calle',
    	'numero'
    	    	
    ];
}

