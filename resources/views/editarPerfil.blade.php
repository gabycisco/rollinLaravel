@extends("plantilla")
@section("titulo_page")
    Editar Perfil | Rollin
@endsection
@section("principal")

  <div class="row">
    <div class="contenedorPerfil col-lg-6 offset-lg-3 col-xs-12 row">
      
        <section class="col-12">
          <span class="titPerfil">TU PERFIL</span>  
          <br><br>
        </section>

        <section class="col-lg-5 col-xs-12 row contenedorImagenPerfil">
          <div class="col-12 contenedorImagenPerfil1">
            <img src="" width="83%" alt="">
          </div>    
        </section>

        <section class="col-lg-7 col-xs-12">
          <h3>EDITAR DATOS</h3>
          <br>
          <label for="nombre">Nombre:</label>
             <input id="nombre" type="text" name="nombre" value="{{$users->name}}">
             <br>
             <label for="apellido">Apellido:</label>
             <input id="apellido" type="text" name="apellido" value="{{$users->surname}}">
             <br>
             <label for="email">Email:</label>
             <input id="email" type="email" name="email" value="{{$users->email}}">
             <br>
             <label for="direccion">Dirección:</label>
             <input id="direccion" type="text" name="direccion" value="{{$users->address}}">
             <br>
             <label for="telefono">Teléfono:</label>
             <input id="telefono" type="number" name="telefono" value="{{$users->phone}}">
          <br><br><br>
          <div class="BOTONROJO botonPerfil">
            <a href="#">GUARDAR</a>
          </div>
          <div class="BOTONROJO botonPerfil">
              <label for="foto">CAMBIAR FOTO</label>
             <input id="foto" type="file" name="foto" value="">
            </div>
          
        </section>

      </div>
    </div>
  </div>

  @endsection