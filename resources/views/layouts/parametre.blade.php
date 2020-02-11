<!DOCTYPE html>
<html lang="en">
<head>


    <!-- META -->

    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Mon Compte</title>
    
    <!-- LINK CDN -->


    <link rel='stylesheet prefetch' href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
   
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
    

    <!-- LINK local -->


     <link href="{{asset('css/parametre.css') }}" rel="stylesheet">

     <link href="{{asset('css/liste.css') }}" rel="stylesheet">

      <!-- script local -->

     <script type="text/javascript" src="{{asset('js/compte.js')}}"></script>

     <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

     <script type="text/javascript" src="{{asset('js/liste.js')}}"></script>

     <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>




</head>
<body>


       <div class="" >

          <div class="mail-box">
            
                  <aside class="sm-side " style="width: 200px">

                    <!-- profil -->
                      <div class="user-head">
                          <a class="inbox-avatar" href="javascript:;">
                              <img  width="64" hieght="60" src="http://bootsnipp.com/img/avatars/ebeb306fd7ec11ab68cbcaa34282158bd80361a7.jpg">
                          </a>

                          <div class="user-name">

                              <h5><a href="#">Djebiri Hamza</a></h5>

                              <span><a href="#">Info.Ali.Pci@Gmail.com</a></span>

                          </div>
                          
                      </div>


                    <!-- END : profil -->


                   <!-- left list -->
                      


                   <!-- left list grp 1 -->  

                     <!--  Inbox --> 

                      <ul class="inbox-nav inbox-divider" >

                          <li id="1">
                              <a href="/ShowConducteurs"><i class="fa fa-inbox"></i> Liste des Conducteurs </a>

                          </li>

                          <li id="2">
                              <a href="/ShowCars"> Liste des véhicules</a>


                          </li>

                           <li id="3">
                              <a href="/ShowControle">Contrôle Technique</a>
                          </li>


                           <li id="4">
                              <a href="/ShowAssurance">les Assurances</a>
                          </li>


                           <li id="5">
                              <a href="/ShowIncidents"> Dépenses & Incidents </a>
                          </li>

                           <li id="6">
                              <a href="/ShowAffectation">Affectation/Désaffectation</a>
                          </li>
                          
                      </ul>

                    <!-- Lables -->
                      
                      <ul class="nav nav-pills nav-stacked labels-info inbox-divider" style="height: 200px">
                          <li> 
                              <h4>Paramétre gébéral <span class="glyphicon glyphicon-asterisk"></span></h4>  
                          </li>
                          <li> <a href="/compte"> <i class="fa fa-bookmark-o"></i> Compte </span></a> </li>

                          <li> <a href="/messages"> <i class="fa fa-envelope-o"></i>Messages </a> </li>
                            
                            <li>      
                              <button class="btn btn-warning"> 

                                 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration: none ;" >

                                            Déconnexion 
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                </button>        

                          </li>
                      </ul>
                      
                      
                   <!-- END : left list grp 1 -->

                      <div class="inbox-body text-center">
                          <div class="btn-group">
                              <a class="btn mini btn-primary" href="javascript:;">
                                  <i class="fa fa-plus"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-success" href="javascript:;">
                                  <i class="fa fa-phone"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-info" href="javascript:;">
                                  <i class="fa fa-cog"></i>
                              </a>
                          </div>
                      </div>

                  </aside>

                  <!-- END  left list -->



                   <!-- le contenu  -->


                  <!-- Navbar  -->


                 <aside class="">

                      <div class="inbox-head">
                          

                  
                          <form action="#" class="pull-right position">
                              <div class="input-append">
                                  <input type="text" class="sr-input" placeholder="Recherche sur paramétre">

                                  <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                              </div>
                          </form>
                          
                      </div>


                       <!-- table -->
            
                          @yield('parametre')
           



                      </aside>
              </div>

        </div>


        
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Include all compiled plugins (below), or include individual files as needed -->

      <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

      <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>

      <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>

      <script src="{{ asset('js/responsive.bootstrap.min.js') }}"></script>



      
    </body>
</html>
    <script type="text/javascript">
    $(document).ready(function() {

    $('#example').DataTable();
} );
    </script>

   

 
  </body>

</html>
