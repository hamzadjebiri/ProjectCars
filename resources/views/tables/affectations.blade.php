
@extends('layouts.parametre')

@section('parametre')
            


<div style="margin-left: 35%">
                            <span class="glyphicon glyphicon-plus"></span>

                               <li data-toggle="modal" data-target="#affectation" class="btn btn-warning">

                                    <a href="#" style="text-decoration: none;"> Ajouter une Assurance <span class="glyphicon glyphicon-add"></span></a>

                               </li>

                             @include('Operations.AddAffectation')


</div> 
     
       <div class="container-fluid" style="margin: 25px auto;">
            

          
 <table id="example" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%" >

        <thead style="">

               <tr>
                    <th>Modifier/Supprimer</th>

                    <th>id Affectation</th>

                    <th>Le Numéro de Véhicule </th>
                                                         
                    <th>Le Numéro du Conducteur </th>
              
                               
               </tr>

        </thead>
                        
        <tbody>

              
                 @foreach($affectation  as $var)
            <tr>

                <td >
                    

                  <div class="col-lg-5 btn btn-success" >
                      
                      <a href="/GET_UpdateAffectation/{{$var->ID_Affectation}}"> <span class="glyphicon glyphicon-edit" >Update </span></a>

                   </div>
                            
                        
                    <form action="/DeleteAffectation/{{$var->ID_Affectation}}" method="post" class="col-lg-4">

                         {{ csrf_field() }} 
                                   
                         <button class="glyphicon glyphicon-trash btn btn-danger ">Delete</button>

                    </form>    



                </td>


                <td>{{$var->ID_Affectation}}</td>            

                <td>{{$var->NumeroVéhicule}}</td>

                <td>{{$var->NumeroConducteur}}</td>

               
       
              
            </tr>
               
              
      

            @endforeach

                        
        </tbody>
    </table>
        
      </div><!--container-->


    <script type="text/javascript">

    $(document).ready(function() {
   

    $('#6').css('background-color','#ADFF2F');
   
        });

    </script>


@endsection            



