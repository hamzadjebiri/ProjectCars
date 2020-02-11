             
 @extends('layouts.parametre')
 @section('parametre')  

 <div style="margin-left: 35%">
     
     

                              <span class="glyphicon glyphicon-plus"></span>

                               <li data-toggle="modal" data-target="#modal3" class="btn btn-warning">

                                    <a href="#" style="text-decoration: none;"> Ajouter un Conducteur <span class="glyphicon glyphicon-add"></span></a>

                               </li>
                                  @include('Operations.AddConducteur')

 </div> 
                                   
<div class="container-fluid" style="margin-top: 60px">


 <table id="example" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%" >

        <thead style="">

            <tr >



                <th>Modifier/Supprimer</th>
                <th>Numero</th>
                <th>Numéro de permis</th>                 
                <th>Nom & Prénom </th>
                <th>Année et wilaya d’obtention</th>                                
                <th>Date de naissance</th>
                <th> Genre</th>
                <th> Adresse</th>
                <th> Situation Familiale</th>
             
            </tr>

        </thead>
                        
        <tbody>
            
             @foreach($Conducteurs  as $var)
            <tr>

                <td class="row">
                    
         
                  <div class=" btn btn-success col-lg-4" >
                      

                      <a href="/GET_UpdateConducteur/{{$var->NumeroConducteur}}"> Update</a>

                   </div>
                            
                  <div class="col-lg-4">

                    <form action="/DeleteConducteur/{{$var->NumeroConducteur}}" method="post" class="col-lg-4">
                                {{ csrf_field() }} 
                      
              
                                  <button class="glyphicon glyphicon-trash btn btn-danger ">Delete</button>


                    </form>    
                    
                  </div>

                    

                   


                </td>


                <td>{{$var->NumeroConducteur}}</td>

                <td>{{$var->NumeroPermis}}</td>

                <td> {{$var->Nom}} {{$var->Prenom}}</td>

                <td>{{$var->AnneeObtention}} A {{$var->WilayaObtention}}</td>

                <td>{{$var->DateNaissance}}</td>

                <td>{{$var->Genre}}</td>

                <td>{{$var->Adresse}}</td>

                <td>{{$var->SituationFamiliale}}</td>
              
       
              
            </tr>
               
              
      

            @endforeach
         
           
           
        </tbody>
    </table>

   
        
</div><!--container-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>


      
    </body>
</html>
    <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();

    $('#1').css('background-color','#ADFF2F');
   
} );
    </script>

@endsection