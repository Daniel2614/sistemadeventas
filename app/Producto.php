<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'sistemadeventa_producto';
     
      protected $fillable = [
    	//'id',
    	'codigo',
    	'nombrep',
    	'descripcion',
    	'precio',
    	'stock'
    	    	
    ];
}
