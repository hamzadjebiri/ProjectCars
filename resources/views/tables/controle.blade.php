
@extends('layouts.parametre')

@section('parametre')
            

<div style="margin-left: 35%">
                            <span class="glyphicon glyphicon-plus"></span>

                               <li data-toggle="modal" data-target="#controle" class="btn btn-warning">

                                    <a href="#" style="text-decoration: none;"> Ajouter un Controle thecnique <span class="glyphicon glyphicon-add"></span></a>

                               </li>

                             @include('Operations.AddControle')


</div> 


          
       <div class="container-fluid" style="margin: 25px auto;">
            

          
 <table id="example" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%" >

        <thead style="">

            <tr >



                <th>Modifier/Supprimer</th>
                <th>Le numéro du contrôle technique</th>
                <th>L’organisme émetteur</th>                 
                <th>La date d’effet</th>
                <th>La durée</th>                                
                <th>Observations</th>
               
            </tr>

        </thead>
                        
        <tbody>

     
             @foreach($ShowControle  as $var)
            <tr>

                <td >
                    

                  <div class="col-lg-5 btn btn-success" >
                      

                      <a href="/GET_UpdateControle/{{$var->NumeroControle}}"> <span class="glyphicon glyphicon-edit" >Update</span></a>

                   </div>
                            
                        
                    <form action="/DeleteControle/{{$var->NumeroControle}}" method="post" class="col-lg-4">
                                {{ csrf_field() }} 
                      
              
                                  <button class="glyphicon glyphicon-trash btn btn-danger">Delete</button>


                    </form>    



                </td>


                <td>{{$var->NumeroControle}}</td>

                <td>{{$var->OrganismeEmetteur}}</td>

                <td>{{$var->DateExpiration_Controle}}</td>

                <td>{{$var->ObservationControle}}</td>

                <td>{{$var->DateEffetControle}}</td>

              
       
              
            </tr>
               
              
      

            @endforeach
         
         
        </tbody>
    </table>
        
      </div><!--container-->


    <script type="text/javascript">

    $(document).ready(function() {
   

           $('#3').css('background-color','#ADFF2F');
   
        });
    
    </script>


@endsection            