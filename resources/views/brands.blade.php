@extends("plantilla")
@section("titulo_page")
    Brands | Rollin
@endsection
@section("principal")

<h1>Administrador de Marcas</h1>
<div> <!--para cargar productos-->
<div class="row store">
@forelse ($brands as $brand)
    
    <div class="col-3 articulo">
      <a href="/detail/{{$product->id}}"><img src="{{$product->img}}" alt="{{$product->name}}" width="400px"></a>
      <a href="/detail/{{$product->id}}"> <h3>{{$product->name}}</h3></a>
      <h1>{{$product->name}}</h1>
      <h1>{{$product->precio}}</h1>
    </div>

@empty
  Todavía no hay marcas cargadas
@endforelse
  </div>

@endsection
