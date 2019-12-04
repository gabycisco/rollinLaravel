@extends("plantilla")
@section("titulo_page")
    Brands | Rollin
@endsection
@section("principal")

<h1>TIENDA</h1>
<div> <!--para cargar productos-->
<div class="row store">
@forelse ($products as $product)

    <div class="col-3 articulo">
      <a href="/detail/{{$product->id}}"><img src="{{$product->img}}" alt="{{$product->name}}" width="400px"></a>
      <a href="/detail/{{$product->id}}"> <h3>{{$product->name}}</h3></a>
      <h1>{{$product->name}}</h1>
      <h1>{{$product->precio}}</h1>
    </div>

@empty

@endforelse
  </div>

@endsection
