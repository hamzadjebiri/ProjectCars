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




        

        <div class="row centered-form modal fade" id="affectation" role="dialog">

              <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 modal-dialog col-lg-12">
                       
                   <div class="panel panel-default">


                          <div class="panel-heading">

                                 <button class="close" data-dismiss="modal" >&times;</button>


                                  <h3 class="panel-title">Ajouter Une Affectation</h3>

                           </div>



                      <div class="panel-body" class="col-lg-12">

                       
                             <form role="form" action="/AddAffectation" method="post">

                                  {{ csrf_field() }} 
                            

                                   <div class="form-group">
                                      
                                      <div class="row"> 

                                         <label class="col-lg-6">Le Numéro de Véhicule </label>

                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                              <input type="number" name="NumeroVéhicule" id="email" class="form-control input-sm" placeholder="Le Numéro de Véhicule" value="1" required="" >

    
                                          </div>   
                                           

                                      </div>
                                    
                                  </div>

                                  <div class="form-group">
                                      
                                      <div class="row"> 

                                         <label class="col-lg-6">Le Numéro de Conducteur </label>

                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                             <input type="number" name="NumeroConducteur" id="email" class="form-control input-sm" placeholder="Le Numéro de Conducteur" value="1" required>

    
                                          </div>   
                                           

                                      </div>
                                    
                                  </div>
<!--
                                  <div class="form-group">
                                      
                                      <div class="row"> 

                                         <label class="col-lg-6">la Marque de Véhicule </label>

                                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                             <input type="text" name="Nom" id="email" class="form-control input-sm" placeholder="la Marque de Véhicule " value="clio" required>

    
                                          </div>   
                                           
                                      </div>
                                    
                                  </div>


                                  <div class="form-group">
                                      
                                                  <div class="row"> 

                                                    <label class="col-lg-6">Nom du Conducteur </label>

                                                       <div class="col-xs-6 col-sm-6 col-md-6 ">

                                                           <input type="text" name="Nom" id="email" class="form-control input-sm" placeholder="Nom" value="djebiri" required>

    
                                                        </div>   
                                           
                                                  </div>
                                    
                                              </div>

                                               <div class="form-group">
                                      
                                                  <div class="row"> 

                                                    <label class="col-lg-6">Prenom</label>

                                                       <div class="col-xs-6 col-sm-6 col-md-6 ">

                                                           <input type="text" name="Prenom" id="email" class="form-control input-sm" placeholder="Prénom" value="hamza" required>

    
                                                        </div>   
                                           
                                                  </div>
                                    
                                              </div>

                                       
-->
   

                                       <input type="submit" value="Ajouter" class="btn btn-info btn-block">


            
              
                          </form>

                      </div>

                  </div>

              </div>

         </div>

      

     

                     
