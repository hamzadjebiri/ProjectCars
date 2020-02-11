
@extends('layouts.parametre')

@section('parametre')
            

                      <div style="margin-left: 35%"> 
                            <span class="glyphicon glyphicon-plus"></span>

                               <li data-toggle="modal" data-target="#incident" class="btn btn-warning">

                                    <a href="#"> Ajouter une Incident <span class="glyphicon glyphicon-add"></span></a>

                               </li>

                             @include('Operations.AddIncidents')


                          </div>   


       <div class="container-fluid" style="margin: 25px auto;">
            

          
 <table id="example" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%" >

        <thead style="">

            <tr >
                    <th>Modifier/Supprimer</th>

                       <th> Le Numero du Véhicule </th>
                    

                    <th>La Catégorie d'Incident </th>

                    <th>La Date d'Incident </th>


                    <th> les Dépenses  </th>

                    <th> Date Dépenses</th>
                   
               
            </tr>

        </thead>
                        
        <tbody>

     
             @foreach($ShowIncidents  as $var)
            <tr>

                <td >
                    

                  <div class="col-lg-5 btn btn-success" >
                      

                      <a href="/GET_UpdateIncidents/{{$var->Numero}}"> <span class="glyphicon glyphicon-edit" >Update</span></a>

                   </div>
                            
                        
                    <form action="/DeleteIncidents/{{$var->Numero}}" method="post" class="col-lg-4">
                                {{ csrf_field() }} 
                      
              
                                  <button class="glyphicon glyphicon-trash btn btn-danger">Delete</button>


                    </form>    



                </td>


                <td>{{$var->NumeroVéhicule}}</td>


                <td>{{$var->CatégorieIncident}}</td>

                <td>{{$var->DateIncident}}</td>

                <td>{{$var->Dépenses}}</td>

                <td>{{$var->DateDépenses}}</td>

           
              
       
              
            </tr>
               
              
      

            @endforeach
         
         
        </tbody>
    </table>
        
      </div><!--container-->

    <script type="text/javascript">

    $(document).ready(function() {
   

           $('#5').css('background-color','#ADFF2F');
   
        });
    
    </script>




@endsection            