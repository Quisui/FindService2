<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Find Service Xela</title>
    <link rel="shortcut icon" href="imagenes/l2.ico"/>
    @yield('head')
  </head>

  <body>
    <header>
      <!-- Barra de navegación responsive-->
      <div id="barra-nav" class="navbar-fixed">
        <nav>
          <div id="div_header" class="nav-wrapper container">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="brand-logo"><img src="imagenes/l2.png" alt="Logo" class="left hide-on-med-and-down" height="75px">Find Service</a>
            <!-- Icono de menu (responsive) -->
            <a href="#" data-target="menu-movil" id="menu_res" class="sidenav-trigger light"><i class="material-icons">menu</i></a>
            <!-- Opciones de la barra de navegacion normal -->
            <ul id="menu" class="right hide-on-med-and-down">
              <li><a href="#" id="nav_btn" class="waves-effect waves-light">Servicios</a></li>
              <li><a href="#" id="nav_btn" class="waves-effect waves-light">Historial</a></li>
              <li><a href="#" id="nav_btn" class="waves-effect waves-light">Blog</a></li>
              <li>
                <a href="#" id="nav_login" class="dropdown-trigger btn-large waves-effect waves-red" data-target='nav_dropdown'>
                  <!--i class="large material-icons">expand_more</i-->Sesión
                </a>
                <ul id='nav_dropdown' class='dropdown-content'>
                  <li><a id="sesion_dropdown" href="{{ route('login') }}">Iniciar Sesión</a></li>
                  <li><a id="sesion_dropdown" href="{{ route('signup') }}">Crear Usuario</a></li>
                  <li><a id="sesion_dropdown" href="#!">Registrar Servicio</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- Opciones del menu lateral (responsive) -->
      <ul class="sidenav" id="menu-movil">
        <li><br></li>
        <li class="center">
          <span id="logo_menu">
            <a href="{{ route('home') }}"><img src="imagenes/l4.png" alt="Logo" height="75px"></a>
          </span>
        </li>
        <li><a href="#" id="snav_btn" class="waves-effect waves-light">Servicios</a></li>
        <li><a href="#" id="snav_btn" class="waves-effect waves-light">Historial</a></li>
        <li><a href="#" id="snav_btn" class="waves-effect waves-light">Blog</a></li>
        <li>
          <a href="#" id="nav_login" class="dropdown-trigger btn-large waves-effect waves-red" data-target='snav_dropdown'>
          Ingresa
          </a>
          <ul id='snav_dropdown' class='dropdown-content'>
            <li><a id="sesion_dropdown" href="{{ route('login') }}">Iniciar Sesión</a></li>
            <li><a id="sesion_dropdown" href="{{ route('signup') }}">Crear Usuario</a></li>
            <li><a id="sesion_dropdown" href="#!">Registrar Servicio</a></li>
          </ul>
        </li>
      </ul>
    </header>


    <!-- Contenido principal de la pagina -->
    <br>

    @yield('busqueda')

    <br><br>

    @yield('contenido')


    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col s6">
            <h5 class="white-text">Find Service</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col s4 offset-s2">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright" >
        <div class="container white-text">
          2018 Esta página está inspirada en
          <a id="findoctor" class="btn" href="https://www.findoctor.com/" target="_blank">Findoctor.com ©</a>
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
      });

      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
      });

      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.slider');
        var instances = M.Slider.init(elems,{
          interval:5000
        });
      });
    </script>
    @yield('scripts')
  </body>
</html>
