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


                              

                                  @foreach($Assurance as $var) @endforeach

                                  <h3 class="panel-title">Modifier l'Assurance Numéro :" {{$var->NumeroAssurance}} "</h3>

                           </div>


                          <div class="panel-body">

                              <form role="form" action="/UpdateAssurance/{{$var->NumeroAssurance}}" method="post">

                                  {{ csrf_field() }} 
                               

                                       <div class="form-group">
                                      
                                          <div class="row"> 

                                                <label class="col-lg-6">La date d’expiration</label>

                                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                       <input type="date" name="DateExpiration" id="email" class="form-control input-sm" placeholder="la date d’expiration" value="2017-06-01">


                                                  </div>   
                                           
                                          </div>
                                    
                                        </div>

                                          <div class="form-group">
                                      
                                              <div class="row"> 

                                                     <label class="col-lg-6">Numéro de Matricule Véhicule</label>

                                                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                          <input type="number" name="Matricule" id="email" class="form-control input-sm" placeholder="Numéro de Matricule Véhicule" value="12121212">

                                                      </div>    

                                               </div>
                                    
                                          </div>



                                   

                                     <div class="form-group">

                                            <div class="row"> 

                                                   <label class="col-lg-6">La date d’effet</label>

                                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                        <input type="date" name="DateEffet" id="last_name" class="form-control input-sm" placeholder="La date d’effet" value="2017-06-01">
                                     
                                                   </div>  

                                                 
                                            </div> 

                                     </div>

                                

                                 
                            
                              
                                        <div class="form-group">

                                             <label class="col-lg-6">Le nom de la compagnie d’assurance</label>

                                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                
                                                <input type="test" name="NomCompagnieAssurance" id="password" class="form-control input-sm" placeholder="Le nom de la compagnie d’assurance" value="12-12-1212">

                                             </div>   
                             
                                        </div>


                                        <br>
                                        <br>
                           
                           
                                      
                              
                                          <div class="form-group">

                                              <label class="col-lg-6">Le type de l’assurance</label>

                                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                
                                                  <input type="text" name="TypeAssurance" id="password_confirmation" class="form-control input-sm" placeholder="Le type de l’assurance" value="12-12-1212">

                                               </div>
                             
                                          </div>
                           

                               
                                           <br>
                                    
                              
                                           <div class="form-group"> 

                                                <div class="row">  

                                                         <label class="col-lg-6">Le numéro de police d’assurance</label> 

                                                         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                           
                                                             <input type="test" name="NumeroPoliceAssurance" id="password" class="form-control input-sm" placeholder="Le numéro de police d’assurance" value="12-12-1212">


                                                         </div>                                                                   
                                                         
                                                 </div>   
                             
                                           </div>
                              
                           
                                     
                                            <div class="form-group">

                                                <div class="row">

                                                    <label class="col-lg-6"> Le Prix de l'Assurance</label>

                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                
                                                       <input type="number" name="PrixAssurance" id="password_confirmation" class="form-control input-sm" placeholder="PrixAssurance" value="2017-06-01">
                             
                                                    </div>

                                                </div> 
                           
                                            </div>
                              
                                            <div class="form-group">

                                                <div class="row">

                                                    <label class="col-lg-6">La date d’effet</label>

                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                
                                                       <input type="text" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="PrixAssurance" value="2017-06-01">
                             
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
 

         
