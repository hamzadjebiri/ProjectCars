<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controle extends Model
{
    //
     protected $table="controles";


     public function vehicule(){

     	return $this->belongsTo('App\Vehicule');
     }
}
