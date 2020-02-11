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


                              

                                  @foreach($Controle as $var) @endforeach

                                  <h3 class="panel-title">Modifier le Controle technique Numéro :" {{$var->NumeroVéhicule}} "</h3>

                           </div>


                      <div class="panel-body">

                          <form role="form" action="/UpdateControle/{{$var->NumeroControle}}" method="post">
                              {{ csrf_field() }} 
                            
                                
                                   <div class="form-group">
                                      
                                      <div class="row"> 

                                         <label class="col-lg-6">Le Numéro du contrôle technique</label>

                                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                            <input type="number" name="NumeroControle" id="email" class="form-control input-sm " value="2">

                                         </div>
                                    
                                       </div>

                                   </div>

                                   <div class="form-group">
                                      
                                      <div class="row"> 

                                         <label class="col-lg-6">La date d’effet</label>

                                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                            <input type="date" name="DateEffetControle" id="email" class="form-control input-sm " value="207-12-12">

                                         </div>
                                    
                                       </div>

                                   </div>


                                   <div class="form-group">
                                      
                                      <div class="row"> 

                                         <label class="col-lg-4">L’organisme émetteur</label>

                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-8">

                                            <textarea name="OrganismeEmetteur" id="email" class="form-control input-sm " value="2" ></textarea>

                                          </div>
                                    
                                       </div>

                                   </div>

                                   <div class="form-group">
                                      
                                      <div class="row"> 

                                         <label class="col-lg-4">La durée</label>

                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-8">

                                            <input type="number" name="DurreControle" id="email" class="form-control input-sm " value="2" ></input>

                                          </div>
                                    
                                       </div>

                                   </div>

                                     <div class="form-group">
                                      
                                      <div class="row"> 

                                         <label class="col-lg-4">Observations</label>

                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-8">

                                            <textarea  name="ObservationControle" id="email" class="form-control input-sm " value="2" ></textarea>

                                          </div>
                                    
                                       </div>

                                   </div>

                                   <input type="submit" value="Ajouter" class="btn btn-info btn-block">
 
                             

                            </form>

                      </div>

                  </div>

              </div>

         </div>

      

      @endsection

     

                     
