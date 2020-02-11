<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Assurance;

use App\Conducteur;

use App\Controle;

use App\Vehicule;

use DB ;
class AdminEditController extends Controller
{
    //



    public function UpdateConducteur(Request $request ,$id ){

           DB::table('conducteurs')

                     ->where('NumeroConducteur', $id )
                         
                     ->update( [

                        'NumeroPermis'=>$request->input('NumeroPermis') , 

                       'Nom'=> $request->input('Nom')   ,

                        'Prenom'=> $request->input('Prenom')  ,

                        'DateNaissance'=> $request->input('DateNaissance')   ,

                        'Adresse'=> $request->input('Adresse')   ,

                        'SituationFamiliale'=> $request->input('SituationFamiliale')   ,

                        'Genre'=> $request->input('Genre')   ,

                        'AnneeObtention'=> $request->input('AnneeObtention')   ,

                        'WilayaObtention'=> $request->input('WilayaObtention')   ,


                    ]);

       

             return redirect("home");

    
    }
    public function UpdateAssurance(Request $request ,$id ){

           DB::table('assurances')

                     ->where('NumeroAssurance', $id )
                         
                     ->update( [

                       'Matricule'=>$request->input('Matricule'),

                       'DateEffet'=>$request->input('DateEffet'),
           
                       'DateExpiration'=>$request->input('DateExpiration'),

                      'NomCompagnieAssurance'=>$request->input('NomCompagnieAssurance'),

                       'TypeAssurance'=>$request->input('TypeAssurance'),

                       'PrixAssurance'=>$request->input('PrixAssurance'),

                      'NumeroPoliceAssurance'=>$request->input('NumeroPoliceAssurance'),


                    ]);

       

             return redirect("ShowAssurance");

    }

    public function UpdateControle(Request $request ,$id ){

           DB::table('controles')

                     ->where('NumeroControle', $id )
                         
                     ->update( [

                            'NumeroControle'=>$request->input('NumeroControle'),

                            'OrganismeEmetteur'=>$request->input('OrganismeEmetteur'),

                           'DurreControle'=>$request->input('DurreControle'),

                            'ObservationControle'=>$request->input('ObservationControle'),

                            'DateEffetControle'=>$request->input('DateEffetControle'),

                    ]);

       

             return redirect("ShowControle");

    }


   public function UpdateVehicule(Request $request ,$id ){

                DB::table('vehicules')

                     ->where('NumeroVéhicule', $id )
                         
                     ->update( [

                              'NumeroSequenceMatricule'=>$request->input('NumeroSequenceMatricule'),

                              'Wilaya'=>$request->input('Wilaya'),

                               'AnneeCirculation'=>$request->input('AnneeCirculation'),

                             'Marque'=>$request->input('Marque'),

                             'Modele'=>$request->input('Modele'),


                               'Couleur'=>$request->input('Couleur'),


                    ]);

       

             return redirect("ShowCars");

    }


    public function UpdateIncidents(Request $request ,$id ){

           DB::table('incidents')

                     ->where('Numero', $id )
                         
                     ->update( [

                       'NumeroVéhicule'=>$request->input('NumeroVéhicule'),

                       'CatégorieIncident'=>$request->input('CatégorieIncident'),

                       'DateIncident'=>$request->input('DateIncident'),

                       'Dépenses'=>$request->input('Dépenses'),

                       'DateDépenses'=>$request->input('DateDépenses'),


                    ]);

       

             return redirect("ShowIncidents");

    }






}
