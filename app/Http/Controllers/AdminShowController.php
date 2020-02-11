<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth ;

use App\Assurance;

use App\Conducteur;

use App\Incident;

use App\Affectation;

use App\Controle;

use App\Vehicule;

use DB ;

class AdminShowController extends Controller
{
    //

 
    public function Compte(){

            
              if (Auth::check()) {  // user is an admin

                              
                  return view('Admin/compte') ;

              }

                 return view('auth/login'); // user is a guest
    
   }
   
    public function ShowCars(){

            
              if (Auth::check()) {  // user is an admin

              	$Cars=Vehicule::all();

              	$arr=Array('Cars'=>$Cars);

                 
                  return view('tables/Vehicules',$arr) ;

              }

	            	 return view('auth/login'); // user is a guest
    
   }

   public function ShowControle(){

            
              if (Auth::check()) {  // user is an admin

              	$ShowControle=Controle::all();

              	$arr=Array('ShowControle'=>$ShowControle);

                 
                  return view('tables/controle',$arr) ;

              }

	            	 return view('auth/login'); // user is a guest
    
   }


  public function ShowAssurance(){

            
              if (Auth::check()) {  // user is an admin

              	$ShowAssurance=Assurance::all();

              	$arr=Array('ShowAssurance'=>$ShowAssurance);

                 
                  return view('tables/assurance',$arr) ;

              }

	            	return view('auth/login'); // user is a guest
    
   }


  public function ShowIncidents(){

            
              if (Auth::check()) {  // user is an admin

                $ShowIncidents=Incident::all();

                $arr=Array('ShowIncidents'=>$ShowIncidents);
                 
                  return view('tables/incidents',$arr) ;

              }

                return view('auth/login'); // user is a guest
    
   }




   public function ShowConducteurs(){

            
              if (Auth::check()) {  // user is an admin

              	$Conducteurs=Conducteur::all();

              	$arr=Array('Conducteurs'=>$Conducteurs);

                 
                  return view('Admin/home',$arr) ;

              }

	            	  return view('auth/login'); // user is a guest
    
   }

   public function ShowAffectation(){

            
              if (Auth::check()) {  // user is an admin

                    
                    $affectation=DB::table('affectations')
                
                  // ->join('conducteurs', 'affectations.NumeroConducteur', '=', 'conducteurs.NumeroConducteur')
                  // ->join('vehicules', 'affectations.NumeroVéhicule', '=', 'vehicules.NumeroVéhicule') 
                   ->get();

                      

                   $arr=Array( 'affectation'=>$affectation);


                  return view('tables/affectations',$arr) ;

              }

                    return view('auth/login');// user is a guest
    
   }

    public function modifier($id){

            
              if (Auth::check()) {  // user is an admin

               
                $Conducteurs=DB::table('conducteurs')
                             ->where('NumeroConducteur',$id)
                             ->get();

                             
                $arr=Array('Conducteurs'=>$Conducteurs);

                               
                  return view('Admin/modifier',$arr) ;

              }

                return view('auth/login');// user is a guest
    
   }


}
