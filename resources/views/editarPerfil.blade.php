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
          <ul style='color:red' class='errores'>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
          
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
            <button type="button" class="btn buttonModalOk col-12" data-toggle="modal" data-target="#exampleModal">Eliminar</button>
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
                <form action="/editarPerfil/destroy" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$users->id}}">
                    <button type="button submit" class="btn buttonModalOk" value="Eliminar">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

  @endsection