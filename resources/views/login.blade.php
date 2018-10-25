@extends('plantilla')
@section('contenido')
    <div class="container">
      <div class="row">
        <form id="login_form" class="col s6 l7">
          <br>
          <br>
          <br>
          <div class="row">
            <div class="input-field col s12">
              <input id="login_email" name ="login_email" type="text" class="validate">
              <label for="login_email">Correo o Nombre de Usuario</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="login_password" name="login_password" type="password" class="validate">
              <label for="login_password">Contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="col s6 offset-s3 offset-l4">
              <button type="button" class="btn-large green" name="button">Ingresar</button>
            </div>
          </div>
        </form>

        <!-- Cuadro de opciones de inicio de sesión -->
        <div class="col s6 l4 offset-l1">
          <br>
          <div class="card" id="login_options">
            <div class="card-content center">
              <span class="card-title">Opciones de Inicio de Sesión</span>
            </div>
            <div class="card-action center">
              <a href="{{url('/auth/google')}}" class="black-text btn-flat waves-effect waves-red"><img class="left" src="imagenes/Google.png" alt="Google" height="30px">Google</a>
              <a href="#" class="black-text btn-flat waves-effect waves-red"><img class="left" src="imagenes/Facebook.png" alt="Facebook" height="30px">Facebook</a>
            </div>
          </div>
          <br>
          <!-- Cuadro de enlace a registro -->
          <div class="card" id="sign_up">
            <div class="card-content center">
              <span class="card-title">¿Aún no estás registrado?</span>
            </div>
            <div class="card-action center">
              <a href="{{ route('signup') }}" class="btn green waves-effect waves-light">Registrarme</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
@endsection
