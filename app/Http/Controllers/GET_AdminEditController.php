<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Assurance;

use App\Conducteur;

use App\Controle;

use App\Vehicule;

use App\Affectation;

use App\Incident;

use DB ;

use Auth ;

class GET_AdminEditController extends Controller
{
    //

      public function GET_UpdateConducteur(){

            
              if (Auth::check()) {  // user is an admin

              	$Conducteurs=Conducteur::all();

              	$arr=Array('Conducteurs'=>$Conducteurs);

                 
                  return view('Update/UpdateConducteur',$arr) ;

              }

	          return view('auth/login'); // user is a guest
    
      }

      public function Get_UpdateAffectation(){

            
              if (Auth::check()) {  // user is an admin

              	$Affectation=Affectation::all();

              	$arr=Array('Affectation'=>$Affectation);

                 
                  return view('Update/UpdateAffectation',$arr) ;

              }

	          return view('auth/login'); // user is a guest
    
      }

        public function GET_UpdateIncidents(){

            
              if (Auth::check()) {  // user is an admin

              	$Incident=Incident::all();

              	$arr=Array('Incident'=>$Incident);

                 
                  return view('Update/UpdateIncidents',$arr) ;

              }

	          return view('auth/login'); // user is a guest
    
      }

       public function GET_UpdateVehicule(){

            
              if (Auth::check()) {  // user is an admin

              	$Vehicule=Vehicule::all();

              	$arr=Array('Vehicule'=>$Vehicule);

                 
                  return view('Update/UpdateVehicules',$arr) ;

              }

	          return view('auth/login'); // user is a guest
    
      }

      public function GET_UpdateAssurance(){

            
              if (Auth::check()) {  // user is an admin

              	$Assurance=Assurance::all();

              	$arr=Array('Assurance'=>$Assurance);

                 
                  return view('Update/UpdateAssurance',$arr) ;

              }

	          return view('auth/login'); // user is a guest
    
      }


      public function GET_UpdateControle(){

            
              if (Auth::check()) {  // user is an admin

              	$Controle=Controle::all();

              	$arr=Array('Controle'=>$Controle);

                 
                  return view('Update/UpdateControle',$arr) ;

              }

	          return view('auth/login'); // user is a guest
    
      }
 
}
