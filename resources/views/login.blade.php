@extends("plantilla")
@section("titulo_page")
    Login | Rollin
@endsection
@section("principal")
    <div class="row container-registro">
      <div class="col-lg-6 d-none d-sm-block imagen-lateral-inicio"></div>
      <div class="col-lg-6 col-sm-12 registro">
        <form class="formulario-de-registro" method="post">
          <h2>INICIAR SESIÓN</h2>
          <br>
          <label for="email">Email</label>
          <input id="email" type="email" name="email" class="<?=$error[0]?>" value="<?=$email?>">
          <span style="color:#721c24;"><?=$mensajeDeErrorEmail?></span>
          <br>
          <label for="password">Clave</label>
          <!--<input id="password" type="password" name="password" class="<?=$error[1]?>" value="<?=$password?>">-->
          <span style="color:#721c24;"><?=$mensajeDeErrorPassword?></span>
          <br>
          <div class="checkbox-recordarme">
              <input id="recordarme"type="checkbox" name="recordarme">
              <label for="recordarme">Recordarme</label>
          </div>
          <br>
          <div class="button">
            <button type="submit">Entrar</button>
          </div>
          <br>
          <div class="FORGOTPASS">
            <a href="#">Olvidé mi clave</a>
          </div>
        </form>
      </div>

@endsection