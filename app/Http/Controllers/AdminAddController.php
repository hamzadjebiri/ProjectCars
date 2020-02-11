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


class AdminAddController extends Controller
{
    //

   


     public function AddAssurance(Request $request){

            $assurance=new Assurance();
            
            $assurance->Matricule=$request->input('Matricule');

            $assurance->DateEffet=$request->input('DateEffet');

            $assurance->DateExpiration=$request->input('DateExpiration');

            $assurance->NomCompagnieAssurance=$request->input('NomCompagnieAssurance');

            $assurance->TypeAssurance=$request->input('TypeAssurance');

            $assurance->PrixAssurance=$request->input('PrixAssurance');

            $assurance->NumeroPoliceAssurance=$request->input('NumeroPoliceAssurance');

            $assurance->save();

             return redirect('ShowAssurance');
       }


        public function AddControle(Request $request){

            $AddControle=new Controle();
            
            $AddControle->NumeroControle=$request->input('NumeroControle');

            $AddControle->OrganismeEmetteur=$request->input('OrganismeEmetteur');

            $AddControle->DurreControle=$request->input('DurreControle');

            $AddControle->ObservationControle=$request->input('ObservationControle');

            $AddControle->DateEffetControle=$request->input('DateEffetControle');


            $AddControle->save();
            
              return redirect('ShowControle');
       }



        public function AddVéhicule(Request $request){

            $AddVéhicule=new Vehicule();
            
            $AddVéhicule->NumeroSequenceMatricule=$request->input('NumeroSequenceMatricule');

            $AddVéhicule->Wilaya=$request->input('Wilaya');

            $AddVéhicule->AnneeCirculation=$request->input('AnneeCirculation');

            $AddVéhicule->Marque=$request->input('Marque');

            $AddVéhicule->Modele=$request->input('Modele');


            $AddVéhicule->Couleur=$request->input('Couleur');



            $AddVéhicule->save();

             return redirect('ShowCars');
       }


       public function AddConducteur(Request $request){

            $AddConducteur=new Conducteur();
            
            $AddConducteur->NumeroPermis=$request->input('NumeroPermis');

            $AddConducteur->Nom=$request->input('Nom');

            $AddConducteur->Prenom=$request->input('Prenom');

            $AddConducteur->DateNaissance=$request->input('DateNaissance');

            $AddConducteur->Adresse=$request->input('Adresse');

            $AddConducteur->SituationFamiliale=$request->input('SituationFamiliale');

            $AddConducteur->Genre=$request->input('Genre');

            $AddConducteur->AnneeObtention=$request->input('AnneeObtention');

            $AddConducteur->WilayaObtention=$request->input('WilayaObtention');



            $AddConducteur->save();

              return redirect('ShowConducteurs');
       }



       public function AddIncident(Request $request){

            $AddIncident=new Incident();
            
            $AddIncident->NumeroVéhicule=$request->input('NumeroVéhicule');

            $AddIncident->CatégorieIncident=$request->input('CatégorieIncident');

            $AddIncident->DateIncident=$request->input('DateIncident');

            $AddIncident->Dépenses=$request->input('Dépenses');

            $AddIncident->DateDépenses=$request->input('DateDépenses');

            $AddIncident->save();

             return redirect('ShowIncidents');
       }

       public function AddAffectation(Request $request){

            $AddAffectation=new Affectation();
                     
              $AddAffectation->NumeroVéhicule=$request->input('NumeroVéhicule');

        
              $AddAffectation->NumeroConducteur=$request->input('NumeroConducteur');



            $AddAffectation->save();

             return redirect('ShowAffectation');
       }






       






}