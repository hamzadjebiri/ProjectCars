
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     
    <link rel='stylesheet prefetch' href="{{asset('css/bootstrap.min.css')}}">


</head>

<style>
    
.vertical-offset-100{
    padding-top:2%;
    padding-right:200px;
}

body{
    background-image: url('image/parking.jpg');
}

.panel{
    width: 500px;
  
    text-align: center;
    
}

form .form-group {
   padding-left: 10%;
   padding-right: 10%;
}

a:hover{
  text-decoration: none;
}

</style>

<body>

  <h1>
      
      <button class="btn btn-danger" ><a href="/" style="text-decoration: none;color: white"> Retourne en arriére </a> </button>

  </h1>

<div class="container">

    <div class="row vertical-offset-100">

        <div class="col-md-4 col-md-offset-4">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h3 class="panel-title">Admin Form</h3>
                </div>

                <div class="panel-body">
                  
          <form class="form-horizontal" method="POST" action="{{ route('login') }}">

              {{ csrf_field() }}

                   

 
                    <fieldset>

                     <div class="form-group{{ $errors->has('name') ? 'has-error': '' }}">

                            <div class="form-group ">
                            
                                <label>Nom d'utilisateur</label>
                                <input class="form-control col-lg-6" placeholder="Nom d'utilisateur Admin" name="name" type="text"">

                            </div>

                                @if ($errors->has('name'))
                                    <span class="help-block alert alert-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                      </div>  <br>
                      
                             
    
                     <div class="form-group{{ $errors->has('name') ? 'has-error': '' }}">

                        <div class="form-group ">

                            <label>Mot de passe </label>
                            <input class="form-control" placeholder="Mot de passe" name="password" type="password" value="">

                        </div>


                               @if ($errors->has('name'))
                                    <span class="help-block alert alert-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                      </div>  <br>

                        <div class="checkbox ">

                            <label>

                                <input name="remember" type="checkbox" value="Remember Me"> Souvient de moi 

                            </label><br><br>

                        </div>

                           <div class="">

                               <input class="btn btn-lg btn-success btn-block " type="submit" value="Login">

                           </div>  

                           <br><br>



                      </form>
                          
                          <div class="">

                               <a href="{{ route('password.request') }}" class="btn btn-lg btn-danger btn-block">

                                Vous-avez oublié votre mot de passe ?

                               </a>      

                               </a></br>

                        <a href="/register" >
                             <span class="glyphicon glyphicon-hand-right"></span> Créer un compte
                        </a>        

                       </div>  

                    </fieldset>


                </div>

            </div>

        </div>

    </div>

</div>

<script type="text/javascript">
    $(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'), 
        .5, 
        { css: 
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});
</script>

</body>
</html>

