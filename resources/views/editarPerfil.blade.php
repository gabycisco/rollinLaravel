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
            <label class="col-lg-4 col-xs-8" for="name">Nombre:</label>
            <input class=" col-xs-8" id="name" type="text" name="name" value="{{$users->name}}">
             <br>
            <label class="col-lg-4 col-xs-8"  for="surname">Apellido:</label>
            <input class="col-xs-8" id="surname" type="text" name="surname" value="{{$users->surname}}">
             <br>
            <label class="col-lg-4 col-xs-8"  for="email">Email:</label>
            <input class="col-xs-8"id="email" type="email" name="email" value="{{$users->email}}">
             <br>
            <label class="col-lg-4 col-xs-8"  for="address">Dirección:</label>
            <input class="col-xs-8"id="addrees" type="text" name="address" value="{{$users->address}}">
             <br>
            <label class="col-lg-4 col-xs-8"  for="telefono">Teléfono:</label>
            <input class="col-xs-8"id="phone" type="number" name="phone" value="{{$users->phone}}">
          <br>
          <br>
          <br>
        </section>
        <div class="BOTONROJO botonPerfil offset-lg-2">
              <label for="avatar">CAMBIAR FOTO</label>
             <input id="avatar" type="file" name="avatar" value="">
            </div>
        <div >
            <button type="submit" class="BOTONROJO botonPerfil guardar offset-lg-3" style="border:none">GUARDAR</button>
            </div>
      </div>
    </div>
  </div>


  @endsection