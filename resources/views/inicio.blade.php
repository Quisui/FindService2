@extends ('plantilla')

@section ('busqueda')
<div>
  <hr>
  <div class="parallax-container">
      <div class="parallax"><img src="imagenes/servicios.png"></div>
      <div class="row container">
        <br><br><br><br><br><br><br>
        <section class="col s12 center">
          <h4>
            En FindService puedes encontrar lo que quieras!
          </h4>
        </section>
        <section class="col s8 offset-s2 center">
          <form>
            <div class="input-field">
              <input id="search_bar" type="search" required>
              <label class="" id="label_search" for="search_bar"><i class="material-icons left">search</i>Busca servicios como hospitales, restaurantes, tiendas, etc...</label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </section>
      </div>
  </div>
  <hr>
</div>
@endsection

@section('contenido')
<div class="row container">
  <div class="col s12 l10 offset-l1">
    <div class="slider">
      <ul class="slides">
        <li>
          <img class="green" src="" alt="">
          <div class="caption center-align">
            <h3>Salud</h3>
            <h5 class="light">En esta categoría encontrarás:
              Doctores, Clínicas, Hospitales, Farmacias y más</h5>
            <a class="btn waves-effect white green-text" href="salud.html">Ir a Categoría Salud</a>
          </div>
        </li>
        <li>
          <img src="" alt="" class="orange accent-4">
          <div class="caption left-align">
            <h3>Comida</h3>
            <h5 class="light">En esta categoría encontrarás:
              Restaurantes, Cafeterías, Comedores y más</h5>
            <a class="btn waves-effect white orange-text text-accent-4" href="comida.html">Ir a Categoría Comida</a>
          </div>
        </li>
        <li>
          <img src="" alt="" class="purple">
          <div class="caption right-align">
            <h3>Comercio</h3>
            <h5 class="light">En esta categoría encontrarás:
              Tiendas, Centros Comerciales, Ferreterías, Librerías y más</h5>
            <a class="btn waves-effect white purple-text" href="comercio.html">Ir a Categoría Comercio</a>
          </div>
        </li>
        <li>
          <img src="" alt="" class="red">
          <div class="caption left-align">
            <h3>Profesional</h3>
            <h5 class="light">En esta categoría encontrarás:
              Abogados, Ingenieros, Contadores, Administradores y más</h5>
            <a class="btn waves-effect white red-text" href="profesional.html">Ir a Categoría Profesional</a>
          </div>
        </li>
        <li>
          <img src="" alt="" class="amber">
          <div class="caption right-align">
            <h3>Ocio</h3>
            <h5 class="light">En esta categoría encontrarás:
              Centros de convivencia y diversos lugares para divertirte</h5>
            <a class="btn waves-effect white amber-text" href="ocio.html">Ir a Categoría Ocio</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection
