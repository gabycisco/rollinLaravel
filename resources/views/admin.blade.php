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
                    @forelse ($products as $product)
  <a href="/edit/{{$product->id}}"><img src="{{$product->img}}" alt="{{$product->name}}" width="400px"></a>
  <a href="#"> <h3>{{$product->price}}</h3></a>
  <h3>{{$product->name}}</h3>
  <h3>{{$product->precio}}</h3>
  </div>
@empty
    No se encontraron artículos.
@endforelse


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