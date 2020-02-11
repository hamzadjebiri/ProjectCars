<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AdminDeleteController extends Controller
{
    //
     public function DeleteConducteur(Request $request ,$id ){

           DB::table('conducteurs')

                     ->where('NumeroConducteur', $id )
                     ->delete();

             return redirect("home");

    }

    public function DeleteVéhicule(Request $request ,$id ){

           DB::table('vehicules')

                     ->where('NumeroVéhicule', $id )
                     ->delete();

             return redirect("ShowCars");

    }

    public function DeleteControle(Request $request ,$id ){

           DB::table('controles')

                     ->where('NumeroControle', $id )
                     ->delete();

             return redirect("ShowControle");

    }
    public function DeleteAssurance(Request $request ,$id ){

           DB::table('assurances')

                     ->where('NumeroAssurance', $id )
                     ->delete();

             return redirect("ShowAssurance");

    }

    
    // <==
    public function DeleteIncidents(Request $request ,$id ){

           DB::table('incidents')

                     ->where('Numero', $id )
                     ->delete();

             return redirect("ShowIncidents");

    }
    public function DeleteAffectation(Request $request ,$id ){

           DB::table('affectations')

                     ->where('ID_Affectation', $id )
                     ->delete();

             return redirect("ShowAffectation");

    }

}
