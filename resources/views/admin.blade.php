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
                        No se encontraron artículos.
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