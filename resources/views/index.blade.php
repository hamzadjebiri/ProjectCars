<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>test</title>

    

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
   
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">


    <link href="{{asset('css/index.css') }}" rel="stylesheet">


    <link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet">


</head>
<body>
 <!--Main Navigation-->

<header>
<nav class="navbar navbar-expand-lg navbar-dark default-color-dark fixed-top" style="margin-bottom: 0px;border: none;padding: 0  0 15px 0">
   
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="3" style="">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Chat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Fotos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Peliculas</a>
            </li>
        </ul>
         <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">14 <i class="fa fa-envelope"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">8 <i class="fa fa-eye"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">1 <i class="fa fa-bullhorn"></i></a>
            </li>
            <li class="nav-item avatar dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://www.torneodj.com/files/avatar/2_120.jpg" class="img-fluid rounded-circle z-depth-0" width="30"></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-purple" aria-labelledby="navbarDropdownMenuLink-5">
                    <a class="dropdown-item whov" href="#"><i class="fa fa-plus"></i> Agregar post</a>
                    <a class="dropdown-item whov" href="#"><i class="fa fa-edit"></i> Editar cuenta</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
</header>
<!-- https://www.youtube.com/watch?v=umvonrmy0fY--> 
    <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="">
         
         <video width="100%"  autoplay style="" class="fixed-top" muted="">
             <source src="{{asset('video/parking.mp4') }}" type="" class="fixed-top">
         </video>

            <div class="full-bg-img">

                <div class="container flex-center">

                    <div class="row">

                        <div class="col-md-12 wow fadeIn">

                            <div class="text-center">

                                <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s" style="font-size: 5em;"><em>Gestion  Du Parc Automobile<em></h1>

                              
                                <a class="btn  btn-" data-wow-delay="0.4s" href="/login"><i class="fa fa-diamond" style="font-size: 4em" ></i><em> Commencer </em> </a> 


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
   

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script>
        new WOW().init();
    </script> 
</body>
</html>