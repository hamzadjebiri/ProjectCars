<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    //

     protected $table="vehicules";


     public function vehicule(){

     	return $this->belongsTo('App\Affectation');
     }
}

