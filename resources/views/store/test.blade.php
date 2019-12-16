@extends("plantilla")
@section("titulo_page")
    Agregaste un producto | Rollin
@endsection
@section("principal")

<br>
<h1>Has agregado este producto al carrito</h1>


<article class="col-12">
  <section class="row">
    <!-- loop de pruductos-->
        <div class="col-8 row">
          <div class="productTitle col-12">
            <h3>{{$formulario['name']}}</h3>
          </div>
          <div class="productPrice col-12">
            <h3>{{$formulario['price']}}</h3>
          </div>
        </div>
      </section>
    </article>


          <div class="btn buttonModalOk">
            <a href="/store">VOLVER A LA TIENDA</a>
          </div>
          <div class="btn buttonModalOk">
            <a href="/mochila">FINALIZAR LA COMPRA</a>
          </div>



@endsection
