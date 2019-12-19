@extends("plantilla")
@section("titulo_page")
    Editar Perfil | Rollin
@endsection
@section("principal")

  <div class="row">
    <div class="contenedorPerfil col-lg-8 offset-lg-2 col-xs-12 row">
      
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
             <span class="error"> {{$errors->first("name")}} </span>
             <br>
            <label class="col-lg-4 col-xs-8"  for="surname">Apellido:</label>
            <input class="col-xs-8" id="surname" type="text" name="surname" value="{{$users->surname}}">
            <span class="error"> {{$errors->first("surname")}} </span>
            <br>
            <label class="col-lg-4 col-xs-8"  for="email">Email:</label>
            <input class="col-xs-8"id="email" type="email" name="email" value="{{$users->email}}">
            <span class="error"> {{$errors->first("email")}} </span>
            <br>
            <label class="col-lg-4 col-xs-8"  for="address">Dirección:</label>
            <input class="col-xs-8"id="addrees" type="text" name="address" value="{{$users->address}}">
            <span class="error"> {{$errors->first("address")}} </span>
            <br>
            <label class="col-lg-4 col-xs-8"  for="provincias">Provincia:</label>
            <select name="provincias" id="provincias" style="width:175px; background-color:#E8D8BE;">
            </select>
            <br>
            <label class="col-lg-4 col-xs-8"  for="telefono">Teléfono:</label>
            <input class="col-xs-8"id="phone" type="number" name="phone" value="{{$users->phone}}">
            <span class="error"> {{$errors->first("phone")}} </span>
            <br>
          <br>
          <br>
        </section>
        <div class="BOTONROJO botonPerfil "style="margin-left:343px;">
              <label for="avatar">CAMBIAR FOTO</label>
             <input id="avatar" type="file" name="avatar" value="">
            </div>
        <div >
            <button type="submit" class="BOTONROJO botonPerfil guardar " style="margin-left:10px; border:none;">GUARDAR</button>
            </div>
      </div>
    </div>
  </div>

<script>
fetch ("https://apis.datos.gob.ar/georef/api/provincias")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
    var select=document.querySelector('#provincias');
    console.log(select.innerHTML);
    for(var i = 0; i < data.provincias.length; i++){
        select.innerHTML = select.innerHTML + "<option value='"+data.provincias[i].nombre+"'>"+data.provincias[i].nombre+"</option>";
    }
    console.log(select.innerHTML);
    
    })
    .catch(function(error){
        console.log("Ups! Tenemos un error:"+error)

    
    })</script>
  @endsection