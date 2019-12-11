
@extends("plantilla")
@section("titulo_page")
    Detalle | Rollin
@endsection
@section("principal")

<h1>Detalle</h1>
<div class="">
  {{$products->name}}
</div>
<div class="">
  <img src="{{$products->img}}" alt="" width="500px">
</div>
<div class="">
<h1>$ {{$products->precio}} Contado</h1>  
</div>



      <!--para cargar productos-->



@endsection
