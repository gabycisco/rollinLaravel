
@extends("plantilla")
@section("titulo_page")
    Detalle de artículo | Rollin
@endsection
@section("principal")
<div class="row ">
    <div class="col-10 offset-1 adminProductContainer row">
        <div class="col-12">
            <h1>DETALLE DEL ARTÍCULO</h1>
        </div>
        <article class="col-12">
                <section class="row">
                    <div class="productImg col-2">
                      <img src="/storage/{{$products->img}}" alt="{{$products->name}}">
                    </div>
                    <div class="col-8 row">
                        <div class="productTitle col-12">
                            <h3>{{$products->name}}</h3>
                        </div>
                        <div class="productBrand col-12">
                            <p>Marca: {{$products->brand_id}}</p>
                        </div>
                        <div class="productDescription col-12">
                            <p>Detalle:</p>
                          <p>{!!nl2br($products->description)!!}</p>
                        </div>
                        <div class="productPrice col-12">
                           <p>$ {{$products->price}}</p>
                        </div>
                    </div>
                    
                    <div class="col-2 row">
                        <form action="/mochila/add" method="post">
                            {{csrf_field()}}
                                <input type="hidden" name="product_id" value="{{$products->id}}">
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="price" value="{{$products->price}}">
                                <button type="button submit" class="btn buttonModalOk" value="Agregar">Agregar al carrito</button>
                            </form> 
                        </div>
                    </div>
                </section>
        </article>
    </div>
</div>
@endsection
