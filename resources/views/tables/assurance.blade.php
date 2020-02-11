
@extends('layouts.parametre')

@section('parametre')
            
<div style="margin-left: 35%">
                            <span class="glyphicon glyphicon-plus"></span>

                               <li data-toggle="modal" data-target="#assurance" class="btn btn-warning">

                                    <a href="#" style="text-decoration: none;"> Ajouter une Assurance <span class="glyphicon glyphicon-add"></span></a>

                               </li>

                             @include('Operations.AddAssurance')


</div> 


          
       <div class="container-fluid" style="margin: 25px auto;">
            

          
 <table id="example" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%" >

        <thead style="">

            <tr >
                    <th>Modifier/Supprimer</th>

                    <th>Le numéro d’assurance  </th>
                    <th>Le Matricule de la véhicule concernée </th>
                    <th>Le numéro de police d’assurance  </th>
                    <th> La date d’effet </th>
                    <th> La durée ou la date d’expiration </th>
                    <th>Le nom de la compagnie d’assurance  </th>
                    <th>  Le type de l’assurance</th>
                    <th> Le prix de l’assurance </th>
                   
               
            </tr>

        </thead>
                        
        <tbody>

     
             @foreach($ShowAssurance  as $var)
            <tr>

                <td >
                    

                  <div class="col-lg-5 btn btn-success" >
                      

                      <a href="/GET_UpdateAssurance/{{$var->NumeroAssurance}}"> <span class="glyphicon glyphicon-edit" >Update </span></a>

                   </div>
                            
                        
                    <form action="/DeleteAssurance/{{$var->NumeroAssurance}}" method="post" class="col-lg-4">
                                {{ csrf_field() }} 
                      
              
                                  <button class="glyphicon glyphicon-trash btn btn-danger ">Delete</button>


                    </form>    



                </td>


                <td>{{$var->NumeroAssurance}}</td>

                <td>{{$var->Matricule}}</td>

                <td>{{$var->DateEffet}}</td>

                <td>{{$var->DateExpiration_Assurance}}</td>

                <td>{{$var->NomCompagnieAssurance}}</td>

                <td>{{$var->TypeAssurance}}</td>

                <td>{{$var->PrixAssurance}}</td>

                <td>{{$var->NumeroPoliceAssurance}}</td>

              
       
              
            </tr>
               
              
      

            @endforeach
         
         
        </tbody>
    </table>
        
      </div><!--container-->


    <script type="text/javascript">

    $(document).ready(function() {
   

           $('#4').css('background-color','#ADFF2F');
   
        });
    
    </script>


@endsection            