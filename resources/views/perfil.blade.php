@extends("plantilla")
@section("titulo_page")
    Tu Perfil | Rollin
@endsection
@section("principal")

  <div class="row">
    <div class="contenedorPerfil col-lg-6 offset-lg-3 col-xs-12 row">
      
        <section class="col-12">
          <span class="titPerfil">TU PERFIL</span>  
        </section>

        <section class="col-lg-5 col-xs-12 row contenedorImagenPerfil">
          <div class="col-12 contenedorImagenPerfil1">
            <img src="/img/contactoDefault.png" width="83%" alt="contactoFotoDefault">
          </div>    
          <div class="col-12 contenedorImagenPerfil2">
            <div class="BOTONROJO botonPerfil">
              <label for="foto">CAMBIAR FOTO</label>
              <input id="foto" type="file" name="foto" value="">
            </div>
          </div>
        </section>

        <section class="col-lg-7 col-xs-12">
          <h3>NOMBRE APELLIDO</h3>
          <p>Email: nombre.apellido@gmail.com</p>
          <p>Fecha de nacimiento: </p>
          <p>Dirección: </p>
          <p>Teléfono: </p>
          <div class="BOTONROJO botonPerfil">
            <a href="#">EDITAR DATOS</a>
          </div>
          <div class="BOTONROJO botonPerfil">
            <a href="#">VER COMPRAS</a>
          </div>
        </section>

      </div>
    </div>
  </div>

  @endsection
