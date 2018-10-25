@extends('plantilla')
@section('contenido')
  <div class="container">
    <div class="row">
      <!--<form id="singup_form" class="col s6 l7">-->
        @if (count($errors)>0)
        <div class="">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="col s6 l7">
          {!!Form::open(array('url'=>'prueba','method'=>'POST','autocomplete'=>'off'))!!}
          {{Form::token()}}
          <!--Nombre y Apellido-->
          <div class="row">
            <div class="input-field col s12 l6">
              <<<<<<< HEAD
              <input id="sign_up_name" name="nombre" type="text" class="validate" required>
              <label for="sign_up_name">Nombre</label>
            </div>
            <div class="input-field col s12 l6">
              <input id="sign_up_last_name" name="apellido" type="text" class="validate" required>
              >>>>>>> Mariano
              <label for="sign_up_last_name">Apellido</label>
            </div>
          </div>
          <!--Nombre de Usuario-->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">person</i>
              <input id="sign_up_nickname" name="nombre_usuario" type="text" class="validate">
              <label for="sign_up_nickname">Nombre de Usuario</label>
            </div>
          </div>
          <!--Correo-->
          <div class="row">
            <div class="input-field col s12 m7">
              <i class="material-icons prefix">alternate_email</i>
              <<<<<<< HEAD
              <input id="sign_up_email" name="correo" type="text" class="validate" required>
              <label for="sign_up_email">Correo</label>
            </div>
            <div class="input-field col s12 m5">
              <i class="material-icons prefix">phone</i>
              <input id="sign_up_phone" name="numero_telefono" type="text" class="validate">
              <label for="sign_up_phone">Numero de Teléfono</label>
            </div>
          </div>
          <!--Contraseña y confirmacion-->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">vpn_key</i>
              <<<<<<< HEAD
              <input id="sign_up_password" name="contraseña" type="password" class="validate" required>
              <label for="sign_up_password">Contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">vpn_key</i>
              <input id="sign_up_confirm_password" type="password" class="validate" required>
              <label for="sign_up_confirm_password">Confirma tu Contraseña</label>
            </div>
          </div>
          <!--Fecha de nacimiento-->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">date_range</i>
              <input id="sign_up_birthday" name="fecha_nacimiento" type="text" class="datepicker">
              <label for="sign_up_birthday">Fecha de Nacimiento</label>
            </div>
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.datepicker');
                var instances = M.Datepicker.init(elems, {
                  autoClose: true,
                  format: 'yyyy-mm-dd',
                  yearRange: 50
                });
              });
            </script>
          </div>

        </div>
        <!--Boton de registro-->
        <div class="row">
          <div class="col s6 offset-s3 offset-l4">
            <button type="submit" class="btn-large green" name="button">Registrarme</button>
          </div>
        </div>
        {!!Form::close()!!}
      <!--</form>-->

      <!-- Cuadro de opciones de registro -->
      <div class="col s6 l4 offset-l1">
        <br>
        <div class="card" id="sign_up">
          <div class="card-content center">
            <span class="card-title">También puedes registrarte usando:</span>
          </div>
          <div class="card-action center">
            <a href="#" class="btn-flat waves-effect waves-red"><img class="left" src="imagenes/Google.png" alt="Google" height="30px">Google</a>
            <a href="#" class="btn-flat waves-effect waves-red"><img class="left" src="imagenes/Facebook.png" alt="Facebook" height="30px">Facebook</a>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
