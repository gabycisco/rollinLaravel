@extends("plantilla")
@section("titulo_page")
    Agregaste un producto | Rollin
@endsection
@section("principal")

<br><br><br>
<h2>Has agregado este producto al carrito</h2>
<br>

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
<br><br>

          <div class="BOTONROJO btn buttonModalOk"style="font-size:15px">
            <a href="/store">VOLVER A TIENDA</a>
          </div>
          <div class="BOTONROJO btn buttonModalOk " style="font-size:15px">
            <a href="/mochila">CERRAR COMPRA</a>
          </div>

<br><br><br><br>

@endsection
