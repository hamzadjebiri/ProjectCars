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
<nav class="navbar navbar-inverse fixed-top" style="margin-bottom: 0px;border: none;padding: 0  0 15px 0">
   
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

        @yield('content')

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