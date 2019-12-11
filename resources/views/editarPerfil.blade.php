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
          <img src="/storage/{{$users->avatar}}" width="83%" alt="">
          </div>    
        </section>

        <section class="col-lg-7 col-xs-12">
          <h3>EDITAR DATOS</h3>
          <br>
          <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="name">Nombre:</label>
            <input id="name" type="text" name="name" value="{{$users->name}}">
             <br>
            <label for="surname">Apellido:</label>
            <input id="surname" type="text" name="surname" value="{{$users->surname}}">
             <br>
            <label for="email">Email:</label>
            <input id="email" type="email" name="email" value="{{$users->email}}">
             <br>
            <label for="address">Dirección:</label>
            <input id="addrees" type="text" name="address" value="{{$users->address}}">
             <br>
            <label for="telefono">Teléfono:</label>
            <input id="phone" type="number" name="phone" value="{{$users->phone}}">
          <br>
          <br>
          <br>
            <div class="BOTONROJO botonPerfil">
            <button type="submit">GUARDAR</button>
            </div>
            <div class="BOTONROJO botonPerfil">
              <label for="avatar">CAMBIAR FOTO</label>
             <input id="avatar" type="file" name="avatar" value="">
            </div>
            
            <form action="/UserController/perfilDestroy" method="post">
              {{csrf_field()}}
              <input type="hidden" name="id" value="{{$users->id}}">
              <input class="BOTONROJO botonPerfil" type="submit" name="" value="Eliminar">
          </form>
          
        </section>

      </div>
    </div>
  </div>

  @endsection