
@extends('layouts.parametre')

@section('parametre')
            



<!--
	 
            


                    <th>Modification/Désaffectation</th>
                   -->
<span class="glyphicon glyphicon-plus"></span>

                               <li data-toggle="modal" data-target="#affectation" class="btn btn-warning">

                                    <a href="#"> Ajouter une affectation <span class="glyphicon glyphicon-add"></span></a>

                               </li>

                                      @include('Operations.AddAffectation')

          
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

              
                @foreach ($affectation as $var)

                <td >

                     <div class=" btn btn-success col-lg-4" >                      

                       <a href="/GET_UpdateAffectation/{{$var->ID_Affectation}}"> Update</a>

                    </div>
                            
                    <div class="col-lg-4">

                           <form action="/DeleteAffectation/{{$var->ID_Affectation}}"  method="post" class="col-lg-4">
                                {{ csrf_field() }}                       
              
                                  <button class="glyphicon glyphicon-trash btn btn-danger ">Delete</button>

                           </form>    
                    
                     </div>



                </td>

                           <tr>

                               <td>{{$var->ID_Affectation  }} </td>

                               <td>{{$var->NumeroVéhicule  }} </td>

                               <td>{{$var->NumeroConducteur  }} </td>

                              

                            </tr>

                @endforeach
        
               
               

                        
        </tbody>
    </table>
        
      </div><!--container-->





@endsection            



