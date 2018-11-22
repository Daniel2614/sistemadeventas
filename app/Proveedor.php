<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Proveedor extends Model
{
    public $table = 'sistemadeventa_proveedor';
     
      protected $fillable = [
    	//'id',
    	'nombre',
    	'apellidop',
    	'apellidom',
    	'rfc',
    	'telefono',
    	'cp',
    	'ciudad',
    	'calle',
    	'numero',
    	'web'
    	    	
    ];
}
