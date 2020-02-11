<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    //

    protected $table="affectations";


     public function conducteur(){

     	return $this->hasMany('App\Conducteur','NumeroConducteur');
     }



     public function vehicule(){

     	return $this->hasMany('App\Vehicule','NumeroVéhicule');
     }

}
