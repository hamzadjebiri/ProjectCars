@extends('layouts.parametre')

@section('parametre')

<div style="margin-left: 35%">
                            <span class="glyphicon glyphicon-plus"></span>

                               <li data-toggle="modal" data-target="#véhicule" class="btn btn-warning">

                                    <a href="#"> Ajouter une Véhicule <span class="glyphicon glyphicon-add"></span></a>

                               </li>

                             @include('Operations.AddVehicules')


</div>   
      
<div class="container-fluid" style="margin-top:60px">


            <table id="example" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%" >
        <thead style="">
            
            <tr >
                   <th>Modifier/Supprimer</th>
                <th>Numero Véhicule</th>
                <th>Marque</th>
                <th>Modèle  </th>
                <th>Couleur</th>
                <th>Wilaya d’immatriculation</th>
                <th> Année de première mise en circulation</th>
                <th>Numéro de séquence du matricule</th>
               
            </tr>
        </thead>
        
       @foreach($Cars  as $var)
            <tr>

                <td>
                    

                      <div class="col-lg-5 btn btn-success" >
                      
                           <a href="/Get_UpdateVehicule/{{$var->NumeroVéhicule}}"> <span class="glyphicon glyphicon-edit" style="color: white" >Update </span></a>

                      </div>
                            
                        
                       <form action="/DeleteVéhicule/{{$var->NumeroVéhicule}}" method="post" class="col-lg-4">
                                {{ csrf_field() }} 
                      
                                  <button class="glyphicon glyphicon-trash btn btn-danger ">Delete</button>

                       </form>                       


                </td>



                <td>{{$var->NumeroVéhicule}}</td>
                <td>{{$var->Marque}}</td>
                 <td>{{$var->Modele}}</td>

                <td style="background-color:{{$var->Couleur}}"></td>
                 
                   <td>{{$var->Wilaya}} </td> 

                <td>{{$var->AnneeCirculation}}</td>

                 <td>{{$var->NumeroSequenceMatricule}}</td>
        </tr>
               
              
      

            @endforeach
         
           
           
        </tbody>
    </table>

</div>
                    <script type="text/javascript">

    $(document).ready(function() {
   

           $('#2').css('background-color','#ADFF2F');
   
        });
    
    </script>
           
@endsection
