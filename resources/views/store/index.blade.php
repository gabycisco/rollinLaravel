@extends("plantilla")
@section("titulo_page")
    Store | Rollin
@endsection
@section("principal")
<style>
  .tiendaTitulo{
    justify-content: center;
    align-items: center;
    display: flex;
  }
  .tiendaArticulo{
    justify-content: flex-start;
    align-items: flex-start;
    display: flex;
    background: #E8D8BE!important;
  }

  .overflow-ellipsis {
  text-overflow: ellipsis;
  }
  h3{
    white-space: nowrap;
    overflow: hidden;
  }

</style>
<div class="row ">
    <div class="col-10 offset-1 editContainer row">
        <div class="col-12 tiendaTitulo">
            <h1>Tienda</h1>
        </div>
            @forelse ($products as $product)
                <section class="tiendaArticulo col-3 row" >
                    <div class="productImg col-12">
                        <a href="/store/detail/{{$product->id}}"><img src="/storage/{{$product->img}}" alt="{{$product->name}}"></a>
                    </div>
                    <div class="col-12 row">
                        <div class="productTitle col-12">
                            <a href="/store/detail/{{$product->id}}"> <h3 class="overflow-ellipsis" alt="{{$product->name}}">{{$product->name}}</h3></a></div>
                        <div class="productBrand col-12">
                            <a href="/store/detail/{{$product->id}}"> <p>Marca: {{$product->brand_id}}</p></a>
                        </div>
                        <div class="productPrice col-12">
                            <a href="/store/detail/{{$product->id}}"> <p>$ {{$product->price}}</p></a>
                        </div>
                    </div>
                </section>
            @empty
                <div class="editsEmpty">
                    <img src="/img/no-products.png" width="70px" alt="">
                    <h4>Todavía no hay cargado ningún artículo.</h4>
                </div>
            @endforelse
          <div class="contenedorPaginacion">
              {{$products->links()}}
          </div>
    </div>
</div>




@endsection
