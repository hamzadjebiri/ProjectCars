

<style type="text/css">
    

.centered-form{
  margin-top: 100px;
  margin-left: 30%;
  color: black

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

                              


                           </div>


                          <div class="panel-body">

                       <form role="form" action="" method="post">

                                  {{ csrf_field() }} 
                      
                                        <div class="form-group">
                                      
                                             <div class="row"> 

                                                <label class="col-lg-6">Numéro de permis</label>

                                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                       <input type="number" name="NumeroPermis" id="email" class="form-control input-sm" placeholder="Numéro de permis" value=">


                                                  </div>   
                                           
                                              </div>
                                    
                                          </div>


                                             <div class="form-group">
                                      
                                                  <div class="row"> 

                                                    <label class="col-lg-6">Nom </label>

                                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                           <input type="text" name="Nom" id="email" class="form-control input-sm" placeholder="Nom" value="">

    
                                                        </div>   
                                           
                                                  </div>
                                    
                                              </div>

                                               <div class="form-group">
                                      
                                                  <div class="row"> 

                                                    <label class="col-lg-6">Prenom</label>

                                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                           <input type="text" name="Prenom" id="email" class="form-control input-sm" placeholder="Prénom" value="">

    
                                                        </div>   
                                           
                                                  </div>
                                    
                                              </div>

   

                                             <div class="form-group">
                                      
                                                  <div class="row"> 

                                                    <label class="col-lg-6">Date de Naissance </label>

                                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                           <input type="date" name="DateNaissance" id="email" class="form-control input-sm" placeholder="La Date de naissance" value="">

    
                                                        </div>   
                                           
                                                  </div>
                                    
                                              </div>

                                                <div class="form-group">
                                      
                                                  <div class="row"> 

                                                    <label class="col-lg-6"> Adresse </label>

                                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                           <textarea name="Adresse" id="email" class="form-control input-sm" placeholder="Numéro de permis" value="" /></textarea>

    
                                                        </div>   
                                           
                                                  </div>
                                    
                                              </div>

                                                <div class="form-group">
                                      
                                                      <div class="row"> 

                                                          <label class="col-lg-6">SituationFamiliale</label>

                                                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                                <select name="SituationFamiliale">

                                                                       <option></option>
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

                                                                <input type="text" name="Genre" id="email" class="form-control input-sm" placeholder="Numéro de permis" value="2017-06-01" /></input>

    
                                                             </div>   
                                           
                                                         </div>
                                    
                                                      </div>

                                                       <div class="form-group">
                                      
                                                        <div class="row"> 

                                                            <label class="col-lg-6"> Année d'Obtention </label>

                                                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                                                <input name="AnneeObtention" id="email" class="form-control input-sm" placeholder="Numéro de permis" value="" /></input>

    
                                                             </div>   
                                           
                                                         </div>
                                    
                                                      </div>

                                                      
                                  

                                       <input type="submit" value="Valider" class="btn btn-info btn-block">
                                  
              
                              </form>
                                                    
                                                    
                      
                        </div>                            
  
                    </div>

                </div>

        </div>
       