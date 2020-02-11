
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet">


    <link href="{{asset('css/index.css') }}" rel="stylesheet">


     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


 <style type="text/css">
     
     .thumbnail .image2 {

     }

      .thumbnail  img{

         padding-top: 0px;
         width: 410px;
         height: 260px
     }

 </style>

</head>
<body>

<header>
<nav class="navbar navbar-default  fixed-top" style="margin-bottom: 0">
   
    <div class="collapse navbar-collapse " id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item active" >

                <a class="nav-link" href="/" style="color: black; "> <em>Accueil</em>  </a>

            </li>
            
        </ul> 

         <ul class="navbar-nav ml-auto nav-flex-icons navbar-right" >

            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">14 <i class="fa fa-envelope"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">8 <i class="fa fa-eye"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">1 <i class="fa fa-bullhorn"></i></a>
            </li>

           
             <li class="dropdown">

                                <button href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} 
                                </button>

                                <ul class="dropdown-menu">

                                     <li> <a href="/comtpe">Compte</a>  </li>


                                     <li> <a href="/parametre">Paramétre</a>  </li>

                                     <li class="divider">  </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Déconnexion 
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                               
                            
                                  
         </ul>
             
    </div>

</nav>

</header>
@yield('navbar') 





        <footer>
            



              <div class="jumbotron text-center mdb-color lighten-2 white-text z-depth-2">

                <!--Title-->
                <h1 class="card-title h2-responsive mt-2 font-bold"><strong>Material Design for Bootstrap</strong></h1>
                <!--Subtitle-->
                <p class="mt-4"><strong>Powerful and free Material Design UI KIT</strong></p>

                <!--Text-->
                <div class="d-flex justify-content-center">
                    <p class="card-text my-2" style="max-width: 43rem;">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam. Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam.
                    </p>
                </div>

                <hr class="my-4 rgba-white-light">

                <button type="button" class="btn btn-outline-white">Buy now <i class="fa fa-diamond ml-1"></i></button>
                <button type="button" class="btn btn-outline-white">Download <i class="fa fa-download ml-1"></i></button>

            </div>
        </footer>



    <script src="{{ asset('js/app.js') }}"></script>



</body>
</html>