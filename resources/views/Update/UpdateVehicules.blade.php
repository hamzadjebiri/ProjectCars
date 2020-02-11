
@extends('layouts.parametre')

@section('parametre')

<style type="text/css">
    

.centered-form{
  margin-top: 100px;

  margin-left:30%;
}
.centered-form .panel{
  background: rgba(255, 255, 255, 0.8);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;

  /* */
}



</style>




        
        <div class="container" style="width: 600px">

              <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 modal-dialog col-lg-12">
                       
                   <div class="panel panel-default">


                          <div class="panel-heading">


                              

                                  @foreach($Vehicule as $var) @endforeach

                                  <h3 class="panel-title">Modifier la véhicule Numéro :" {{$var->NumeroVéhicule}} "</h3>

                           </div>

                      <div class="panel-body">

                           <form role="form" action="/UpdateVehicule/{{$var->NumeroVéhicule}}" method="post">
                              {{ csrf_field() }} 

                                    
                            
                                <!-- label -->
                                    <div class="form-group">
                                      
                                              <label class="col-lg-5">Wilaya d’immatriculation</label>

                                                
                                                   <select class="form-control" style="height: 30px" name="Wilaya">

                                                       @include('Admin.wilaya')

                                                   </select>                                                
                                    
                                       </div>

                                 <!-- end -->
                                 
                                 <!-- label -->

                                   <div class="form-group">
                                                                                                  
                                        <label class="col-lg-7">Année de première mise en circulation</label>

                                        <input type="date" name="AnneeCirculation" class="form-control" >
                                        
                                   </div>

                                 <!-- end -->  
                                 <!-- label -->  

                                   <div class="form-group">
                                                                            
                                        <label class="col-lg-6">Numéro de séquence du matricule </label>                                                
                                        <input type="number" name="NumeroSequenceMatricule" class="form-control" >
                                       
                                    </div>

                                 <!-- end -->  
                                 <!-- label -->  

                                   <div class="form-group">
                                                                           
                                        <label class="col-lg-2">Marque </label>                                        

                                        <input type="text" name="Marque" class="form-control" >

                                    </div>

                                 <!-- end -->
                                      <!-- label -->  

                                   <div class="form-group">
                                      
                                        <label class="col-lg-2">Modèle </label>
                        
                                        <input type="text" name="Modele" class="form-control" >

                                    </div>

                                     <div class="form-group">
                                      
                                   
                                                                
                                        <label class="">Couleur </label>

                                        <input type="color" name="Couleur" class="" style="height: 30px; width: 100px" >
                                 
                                     </div>
                                    
                              
                                 <!-- end -->  

                                  <input type="submit" value="Ajouter" class="btn btn-info col-lg-12">
 
                     
                          
                             </form>

                      </div>

                  </div>

              </div>

         </div>

      

     
       @endsection

                     
