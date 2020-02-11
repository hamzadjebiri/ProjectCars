<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    //
     protected $table="conducteurs";


     public function vehicule(){

     	return $this->belongsTo('App\Affectation');
     }
}

