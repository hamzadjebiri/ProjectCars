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


                              

                                  @foreach($Incident as $var) @endforeach

                                  <h3 class="panel-title">Modifier l'incident et dépenses Numéro :" {{$var->Numero}} "</h3>

                           </div>


                      <div class="panel-body">

                           <form role="form" action="/UpdateIncidents/{{$var->Numero}}" method="post">
                              {{ csrf_field() }} 

                                    
                            
                                <!-- label -->
                                    <div class="form-group">
                                      
                                              <label class="col-lg-5">Le Numero du Véhicule</label>

                                                   <input type="number" name="NumeroVéhicule" class="form-control" value="5541">                                         
                                    
                                       </div>

                                 <!-- end -->
                                 
                                 <!-- label -->

                                   <div class="form-group">
                                                                                                  
                                        <label class="col-lg-7">La Catégorie d'Incident</label>

                                        <input type="text" name="CatégorieIncident" class="form-control" value="Y">
                                        
                                   </div>

                                 <!-- end -->  
                                 <!-- label -->  

                                   <div class="form-group">
                                                                            
                                        <label class="col-lg-6">La Date d'Incident</label>                                                
                                        <input type="date" name="DateIncident" class="form-control" value="2017-01-01">
                                       
                                    </div>

                                 <!-- end -->  
                                 <!-- label -->  

                                   <div class="form-group">
                                                                           
                                        <label class="col-lg-2">les Dépenses </label>                                        

                                        <input type="text" name="Dépenses" class="form-control" value="201701">

                                    </div>

                                 <!-- end -->
                                      <!-- label -->  

                                   <div class="form-group">
                                      
                                        <label class="col-lg-2"> Date Dépenses </label>
                        
                                        <input type="date" name="DateDépenses" class="form-control" value="2017-01-01">

                                    </div>

                                     
                              
                                 <!-- end -->  

                                  <input type="submit" value="Ajouter" class="btn btn-info col-lg-12">
 
                     
                          
                             </form>

                      </div>

                  </div>

              </div>

         </div>

      
@endsection
     

                     
