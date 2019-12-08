@extends("plantilla")
@section("titulo_page")
    Tu Perfil | Rollin
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
          <img src="/storage/{{$users->avatar}}" width="83%" alt="contactoFotoDefault">
          </div>    
        </section>

        <section class="col-lg-7 col-xs-12">
          <h3>{{$users->name . " ".$users->surname}}</h3>
          <br>
          <p>Email: {{$users->email}}</p>

          <p>Dirección: {{$users->address}} </p>
          <p>Teléfono: {{$users->phone}}</p>
          <br><br>
          <div class="BOTONROJO botonPerfil">
            <a href="/editarPerfil/{id}">EDITAR DATOS</a>
          </div>
          <div class="BOTONROJO botonPerfil">
            <a href="#">VER COMPRAS</a>
          </div>
        </section>

      </div>
    </div>
  </div>

  @endsection
