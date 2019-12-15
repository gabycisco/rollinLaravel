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
          <a href="/editarPerfil/{{$users->id}}">EDITAR DATOS</a>
          </div>
          <div class="BOTONROJO botonPerfil">
            <a href="#">VER COMPRAS</a>
          </div>
          <br><br>
          <!--ACA FALTA LOGICA PARA QUE SI NO ES ADMIN SE OCULTEN LOS BOTONES-->
          <div class="BOTONROJO botonPerfil">
            <a href="/verListaNL">VER SUBSC.</a>
          </div>
          <div class="BOTONROJO botonPerfil">
            <a href="/verListaContactos">VER MENSAJES</a>
          </div>
          <!--FIN LOGICA-->
          <br><br>
          <button type="button" class="BOTONROJO btn buttonModalOk col-12" data-toggle="modal" data-target="#exampleModal">Eliminar</button>
        </section>
      </div>
    </div>
  </div>
  <!-- Modal de Confirmación -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar - Confirmación</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
              <b>¿Está seguro de eliminar el el perdil de {{$users->name}}?</b> <br>
              Luego de confirmar la operación no será posible recuperar el registro.
          </div>
          <div class="modal-footer">
              <button type="button" class="btn button-contactoClaro" data-dismiss="modal">Cancelar</button>
              <form action="/perfil/destroy" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$users->id}}">
                  <button type="button submit" class="btn buttonModalOk" value="Eliminar">Eliminar</button>
              </form>
          </div>
      </div>
  </div>
</div>

  @endsection
