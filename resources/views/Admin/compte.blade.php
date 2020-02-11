
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Settings - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('ccss/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">

    <style type="text/css">


    </style>

    <link rel="stylesheet" type="text/css" href="{{asset('css/compte.css')}}">

    <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>


    <link rel='stylesheet prefetch' href="{{asset('css/bootstrap.min.css')}}">

    <script type="text/javascript">

        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });

    </script>






</head>

<body class="sidebar-is-reduced">
  <header class="l-header">

    <div class="l-header__inner clearfix">

      <!-- big and small -->
      <div class="c-header-icon js-hamburger">
        <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
      </div>


      <div class="c-header-icon has-dropdown"><span class="c-badge c-badge--header-icon animated shake">12</span><i class="fa fa-bell"></i>



        <div class="c-dropdown c-dropdown--notifications">
          <div class="c-dropdown__header"></div>
          <div class="c-dropdown__content"></div>
        </div>



      </div>

      <!-- ***************************search *************************-->
      <div class="c-search">

        <form action="Parametre" method="post">

           <input class="c-search__input u-input" placeholder="Search..." type="text"/>

        </form>   

      </div>



      <!-- ***************************LOGOUT  *************************-->
      <div class="header-icons-group" >
        <div class="c-header-icon logout"><i class="fa fa-power-off"></i></div>
      </div>
    </div>



  </header>
  <div class="l-sidebar">
    <div class="logo">
      <div class="logo__txt">O</div>
    </div>
    <div class="l-sidebar__content">

      <nav class="c-menu js-menu">

        <ul class="u-list">

          <li class="c-menu__item is-active" data-toggle="tooltip" title="Proposals">

            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>

              <div class="c-menu-item__title"><span>Paramètre général</span></div>

            </div>


          </li>

          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="History">

            <div class="c-menu__item__inner"><i class="fa fa-history"></i>

              <div class="c-menu-item__title"><span>Messages</span></div>

            </div>



          </li>


          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Accounts">

            <div class="c-menu__item__inner"><i class="fa fa-address-book-o"></i>

              <div class="c-menu-item__title"><span>Mes Informations</span></div>

            </div>


          </li>

        </ul>
      </nav>
    </div>
  </div>
</body>
<main class="l-main">
  <div class="content-wrapper content-wrapper--with-bg">
    
    <div class="container">
  <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Gérez votre compte</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom">Nom </label>  
  <div class="col-md-6">
  <input id="Nom" name="nom" type="text" placeholder="modifier votre nom .." class="form-control input-md" required="">
  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Prénom">Prénom </label>  
  <div class="col-md-6">
  <input id="Prénom" name="prenom" type="text" placeholder="modifier votre nom .." class="form-control input-md" required="">
  
  </div>
</div>


<div class="form-group">

  <label class="col-md-4 control-label" for="password">Mot de passe </label>  
  <div class="col-md-6">
  <input id="password" name="password" type="password" placeholder="modifier votre nom .." class="form-control input-md" required="">
  
  </div>

</div>


<div class="form-group">

  <label class="col-md-4 control-label" for="email">Email </label>  
  <div class="col-md-6">
  <input id="email" name="email" type="email" placeholder="modifier votre nom .." class="form-control input-md" required="">
  
  </div>

</div>

<!-- Prepended text-->


<legend>Display Settings</legend>
   
  
</fieldset>

</form>

</div>
  </div>
</main>



<!-- glyph icon -->
<script src='https://use.fontawesome.com/2188c74ac9.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>


</body></html>
  <script type="text/javascript" src="{{asset('js/compte.js')}}"> </script>
</body>
</html>
