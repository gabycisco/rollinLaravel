@extends("plantilla")
@section("titulo_page")
    Gracias por su Mensaje! | Rollin
@endsection
@section("principal")



<h1>Total hasta el momento</h1>

@foreach ($total as $product)

  <div class="col-3 articulo">
    <img src="/storage/{{$product->img}}" alt="{{$product->name}}" width="40px">
    <h3>{{$product->name}}</h3>
    <h3>{{$product->name}}</h3>
    <h3>{{$product->precio}}</h3>
  </div>

@endforeach

<section>
<article class=fotoCompra>
<img src="/img/purchase.png" alt="">
</article>
</section>
<br><br>
<div class="BOTONROJO botonPerfil">
            <a href="/">VOLVER AL HOME</a>
          </div>

<br><br><br>

@endsection
