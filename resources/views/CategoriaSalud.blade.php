@extends ('plantilla')

@section ('busqueda')

    <!-- Contenido principal de la pagina -->
    <br><br>
    <div class="container">
      <div class="row">
          <section class="col s12 center">
              <h1 class = "z-depth-5 green section white-text">SALUD</h1>
            </section>
        <section class="col s8 offset-s2 center">
          <form>
            <div class="input-field">
              <input id="search_bar" type="search" required>
              <label class="" for="search_bar"><i class="material-icons left">search</i>Busca servicios como hospitales, restaurantes, tiendas, etc...</label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </section>
      </div>
    </div>

    <!--div class="parallax-container">
      <div class="parallax">
        <img src="imagenes/Xela.jpg">
      </div>
    </div-->

    <div class="container">
      <div class="row">
          <div class="col s3">
              <div class="card">
                  <div class="card-image">
                    <img src="imagenes\pruebaServicio\logo.png">
                    <a href="{{ route('service') }}" class="btn-floating pulse halfway-fab waves-effect waves-light green"><i class="material-icons">subdirectory_arrow_right</i></a>
                  </div>
                  <div class="card-content">
                      <strong style="font-weight: bold" class="blue-text text-darken-4">Hospital Privado Quetzaltenango S.A.<strong>
                  </div>
                </div>
          </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
      });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.parallax');
      var instances = M.Parallax.init(elems);
    });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.carousel');
      var instances = M.Carousel.init(elems);
    });
    </script>
    <script>
      var instance = M.Carousel.init({
        fullWidth: true,
        indicators: true
      });
    </script>
@endsection
