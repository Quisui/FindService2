@extends ('plantilla')

@section ('contenido')
  <!-- Contenido principal de la pagina -->
  <br><br>
  <!--div class="parallax-container">
      <div class="parallax">
        <img src="imagenes/Xela.jpg">
      </div>
    </div-->

  <div class="container">
    <div class="row">
      <div class="col s12">

        <div class="container">
          <div class="row">
            <form class="col s12">
              <!--Logo-->
              <div class="row">
                <div class="input-field col s6">
                  <form action="#">
                    <div class="file-field input-field">
                      <div class="btn">
                        <span>Subir logo</span>
                        <input type="file" name="adjunto" accept=".gif, .jpg, .png">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Logo del servicio">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!--Nombre del Servicio-->
              <div class="row">
                <div class="input-field col s11">
                  <i class="material-icons prefix">business</i>
                  <input id="nombreServicio" type="text" class="validate">
                  <label for="register_phone">Nombre del Servicio</label>
                </div>
              </div>
              <!--Direccion del Servicio-->
              <div class="row">
                <div class="input-field col s11">
                  <i class="material-icons prefix">location_on</i>
                  <input id="register_address" type="text" class="validate">
                  <label for="register_address">Direccion del Servicio</label>
                </div>
              </div>
              <!--Sucursales-->
              <div class="row">
                <div class="col s6">
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>¿Sucursales?</span>
                  </label>
                </div>
              </div>
              <!--Horarios-->
              <div class="row">
                <div class="input-field col s4">
                  <i class="material-icons prefix">schedule</i>
                  <input id="horarioApertura" type="text" class="timepicker">
                  <label for="horarioApertura">Horario de Apertura</label>
                </div>
                <div class="input-field col s4">
                  <i class="material-icons prefix">schedule</i>
                  <input id="horarioCierre" type="text" class="timepicker">
                  <label for="horarioCierre">Horario de Cierre</label>
                </div>
                <div class="input-field col s4">
                  <label>
                    <input type="checkbox" class="filled-in"/>
                    <span>Abierto las 24hrs</span>
                  </label>
                </div>
              </div>
              <!--Telefonos-->
              <div class="row">
                <div class="input-field col s11">
                  <i class="material-icons prefix">phone</i>
                  <input id="register_phone" type="text" class="validate">
                  <label for="register_phone">Numero de Teléfono</label>
                </div>
              </div>
              <!--Otros telefonos-->
              <div class="row">
                <div class="col s6">
                  <label>
                    <input type="checkbox" class="filled-in" />
                    <span>¿Más telefonos?</span>
                  </label>
                </div>
              </div>
              <!--Contacto-->
              <div class="row">
                <div class="input-field col s11">
                  <i class="material-icons prefix">person</i>
                  <input id="nombreContacto" type="text" class="validate">
                  <label for="nombreContacto">Nombre de la Persona encargada del Servicio</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s11">
                  <i class="material-icons prefix">email</i>
                  <input id="correoContacto" type="text" class="validate">
                  <label for="correoContacto">Correo de la Persona encargada del Servicio</label>
                </div>
              </div>
              <!--Descripción del servicio-->
              <div class="row">
                <form class="col s11">
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">description</i>
                      <textarea id="textarea1" class="materialize-textarea"></textarea>
                      <label for="textarea1">Descripción del Servicio</label>
                    </div>
                  </div>
                </form>
              </div>
              <!--Fotografias-->
              <div class="row">
                <div class="input-field col s11">
                  <form action="#">
                    <div class="file-field input-field">
                      <div class="btn">
                        <span>Subir Fotografias</span>
                        <input type="file" name="adjunto" accept=".gif, .jpg, .png" multiple>
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Fotografías sobre el servicio">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!--Formato de Pago-->
              <p><i class="material-icons prefix">payment</i>Formato de Pago</p>
              <div class="input-field col s3">
                <label>
                  <input type="checkbox" class="filled-in"/>
                  <span>Tarjeta de Credito</span>
                </label>
              </div>
              <div class="input-field col s3">
                <label>
                  <input type="checkbox" class="filled-in"/>
                  <span>Tarjeta de Debito</span>
                </label>
              </div>
              <div class="input-field col s3">
                <label>
                  <input type="checkbox" class="filled-in"/>
                  <span>Efectivo</span>
                </label>
              </div>
              <div class="input-field col s3">
                <label>
                  <input type="checkbox" class="filled-in"/>
                  <span>Cheque</span>
                </label>
              </div>
          </div>
          <!--Pagina Web-->
          <div class="row">
            <div class="input-field col s11">
              <i class="material-icons prefix">pageview</i>
              <input id="paginaWeb" type="text" class="validate">
              <label for="paginaWeb">Pagina Web del Servicio</label>
            </div>
          </div>
          <!--Redes Sociales-->
          <div class="row">
            <div class="input-field col s11">
              <i class="material-icons prefix">web_asset</i>
              <input id="paginaWeb" type="text" class="validate">
              <label for="paginaWeb">Link de Sus Redes Sociales</label>
            </div>
          </div>
          <!--Otras Redes Sociales-->
          <div class="row">
            <div class="col s6">
              <label>
                <input type="checkbox" class="filled-in"/>
                <span>¿Otras Redes Sociales?</span>
              </label>
            </div>
          </div>
          <!--Boton de registro-->
          <div class="row">
            <div class="col s6 offset-s3 offset-l4">
              <button type="button" class="btn-large green" name="button">Registrarme</button>
            </div>
          </div>
          </form>

          <!-- Cuadro de opciones de registro -->
        </div>
      </div>

    </div>
  </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems);
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.parallax');
      var instances = M.Parallax.init(elems);
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
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
  <script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems);
  });
  </script>
@endsection