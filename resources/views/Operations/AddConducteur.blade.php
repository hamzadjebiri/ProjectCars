
<style type="text/css">
    

.centered-form{
  margin-top: 100px;
  margin-left: 30%;
  color: black;


}
.centered-form .panel{
  background: rgba(255, 255, 255, 0.8);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;

  /* */
}


</style>


        <div class="row centered-form modal fade" id="modal3" role="dialog">

              <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 modal-dialog col-lg-12">
                       
                   <div class="panel panel-default">


                          <div class="panel-heading">

                                 <button class="close" data-dismiss="modal" >&times;</button>


                                  <h3 class="panel-title">Ajouter Un Conducteur</h3>

                           </div>


                          <div class="panel-body">

                              <form role="form" action="AddConducteur" method="post">

                                  {{ csrf_field() }} 
                      
                                        <div class="form-group">
                                      
                                             <div class="row"> 

                                                <label class="col-lg-6">Numéro de permis</label>

                                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                       <input type="number" name="NumeroPermis" id="email" class="form-control input-sm" placeholder="Numéro de permis" value="2017-06-01" required="">


                                                  </div>   
                                           
                                              </div>
                                    
                                          </div>


                                             <div class="form-group">
                                      
                                                  <div class="row"> 

                                                    <label class="col-lg-6">Nom </label>

                                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                           <input type="text" name="Nom" id="email" class="form-control input-sm" placeholder="Nom" value="2017-06-01" required>

    
                                                        </div>   
                                           
                                                  </div>
                                    
                                              </div>

                                               <div class="form-group">
                                      
                                                  <div class="row"> 

                                                    <label class="col-lg-6">Prenom</label>

                                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                           <input type="text" name="Prenom" id="email" class="form-control input-sm" placeholder="Prénom" value="2017-06-01" required>

    
                                                        </div>   
                                           
                                                  </div>
                                    
                                              </div>

   

                                             <div class="form-group">
                                      
                                                  <div class="row"> 

                                                    <label class="col-lg-6">Date de Naissance </label>

                                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                           <input type="date" name="DateNaissance" id="email" class="form-control input-sm" placeholder="Numéro de permis" value="2017-06-01" required>

    
                                                        </div>   
                                           
                                                  </div>
                                    
                                              </div>

                                                <div class="form-group">
                                      
                                                  <div class="row"> 

                                                    <label class="col-lg-6"> Adresse </label>

                                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                           <textarea name="Adresse" id="email" class="form-control input-sm" placeholder="Adresse" value="2017-06-01" required /></textarea>

    
                                                        </div>   
                                           
                                                  </div>
                                    
                                              </div>

                                                <div class="form-group">
                                      
                                                      <div class="row"> 

                                                          <label class="col-lg-6">SituationFamiliale</label>

                                                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                                <select name="SituationFamiliale" required>

                                                                      <option>Marié(e)</option>
    
                                                                      <option>Célébatére(e)</option>

                                                                      <option>Déforcé(e)</option>

                                                                </select>

    
                                                            </div>   
                                           
                                                        </div>
                                    
                                          
                                                   </div>     

                                                    <div class="form-group">
                                      
                                                        <div class="row"> 

                                                            <label class="col-lg-6"> Genre </label>

                                                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                                <input type="text" name="Genre" id="email" class="form-control input-sm" placeholder="Numéro de permis" value="2017-06-01" required/></input>

    
                                                             </div>   
                                           
                                                         </div>
                                    
                                                      </div>

                                                       <div class="form-group">
                                      
                                                        <div class="row"> 

                                                            <label class="col-lg-6"> Année d'Obtention </label>

                                                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                                <input name="AnneeObtention" id="email" class="form-control input-sm" placeholder="Numéro de permis" value="2017-06-01" required /></input>

    
                                                             </div>   
                                           
                                                         </div>
                                    
                                                      </div>

                                                        <div class="form-group">
                                      
                                                        <div class="row"> 

                                                            <label class="col-lg-6"> Wilaya d'Obtention</label>

                                                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                                <select name="WilayaObtention" required>

                                                                     @include('Admin.wilaya')
    
                                                                     
                                                                </select>

    

    
                                                             </div>   
                                           
                                                         </div>
                                    
                                                      </div>
                                  

                                       <input type="submit" value="Ajouter" class="btn btn-info btn-block">
                                  
              
                              </form>
                                                    
                      
                        </div>                            
  
                    </div>

                </div>

        </div>
       