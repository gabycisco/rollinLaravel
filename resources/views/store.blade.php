@extends("plantilla")
@section("titulo_page")
    Store | Rollin
@endsection
@section("principal")

<h1>TIENDA</h1>
<div> <!--para cargar productos-->
@forelse ($products as $product)
  <a href="/detail/{{$product->id}}"><img src="{{$product->img}}" alt="{{$product->name}}" width="400px"></a>
  <a href="#"> <h3>{{$product->name}}</h3></a>
  <h3>{{$product->name}}</h3>
  <h3>{{$product->precio}}</h3>
  </div>
@empty

@endforelse


@endsection
