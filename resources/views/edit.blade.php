@extends("plantilla")
@section("titulo_page")
    Admin | Rollin
@endsection
@section("principal")
<div class="row portadaContacto">
            <div class="col-md-10 recuadroContacto">
              <div class="col-md-12 col-xs-12">
                <h2>ADMIN</h2>  
              </div>
              <section class="row">
                <article class="col-md-10 col-xs-12">
                    <section class="articleList">
                    <div class="">
  {{$products->name}}
</div>
<div class="">
  <img src="{{$products->img}}" alt="" width="500px">
</div>
<div class="">
<h1>$ {{$products->precio}} Contado</h1>  
</div>


                    </section> 
                </article>
                <article class="col-md-2 col-xs-12">
                    <section class="button-contacto">
                        <a href="#">AGREGAR</a>
                    </section>
                    <section class="button-contacto">
                        <a href="#">EDITAR</a>
                    </section>
                    <section class="button-contacto">
                        <a href="#">ELIMINAR</a>
                    </section>                
                </article>
              </section>
            </div>
            
        </div>

@endsection