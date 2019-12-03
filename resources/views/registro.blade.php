@extends('plantilla')

  @section('principal')
  
     <div class="row container-registro">
       <div class="col-lg-6 col-sm-12 registro">
         <form class="formulario-de-registro" method="POST" action="/registro" enctype="multipart/form-data">
           <h2>REGISTRO</h2>
           <br>
           <label for="name">Nombre</label>
           <input id="name" type="text" name="name" value="" placeholder="">
           <br>
           <label for="surname">Apellido</label>
           <input id="surname" type="text" name="surname" value="" placeholder="">
           <br>
           <label for="email">Email</label>
           <input id="email" type="email" name="email" value="" placeholder="">
           <br>
           <div class="">
             <label for="foto">FOTO</label>
             <input id="foto" type="file" name="foto" value="">
           </div>
           <br>
           <label for="password">Clave</label>
           <input id="password" type="password" name="password" placeholder="">
           <br>
           <label for="">Confirmar Clave</label>
           <input id="password_confirm" type="password" name="password_confirm" placeholder="">
           <br>
           <div>
               <input id="ofertas" type="checkbox" name="ofertas">
               <label for="ofertas">Deseo recibir ofertas y novedades</label>
           </div>
           <br>
           <div class="button">
             <button type="submit">ENVIAR</button>
           </div>
         </form>
       </div>
       <div class="col-lg-6 d-none d-sm-block imagen-lateral"></div>
     </div>
     @endsection


