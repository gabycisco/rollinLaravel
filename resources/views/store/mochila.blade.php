@extends("plantilla")
@section("titulo_page")
    Tu Mochila | Rollin
@endsection
@section("principal")
<div class="row">
<section class="col-11">
    <br><br>
          <span class="mochilaTitulo" style='margin-left:92px;'>TU MOCHILA</span>
        </section>
  <div class="col-10 offset-1 adminProductContainer row">
      <div class="col-12">
          <h1>Total hasta el momento ${{$cartOwner[0]->amount}}</h1>
          <br><br>
            
      </div>
      @foreach ($productosEnCarrito as $product)
        <article class="col-12">
          <section class="row">
            <!-- loop de pruductos-->
                <div class="productImg col-2">
                  <img src="/storage/{{$product->img}}" alt="{{$product->name}}" width="10px">
                </div>
                <div class="col-8 row">
                  <div class="productTitle col-12">
                    <h3>{{$product->name}}</h3>
                  </div>
                  <div class="productPrice col-12">
                    <h3>{{$product->price}}</h3>
                  </div>
                </div>
              </section>
            </article>
      @endforeach
      <br><br><br><br>
      <div class="btn buttonModalOk">
         <div class="">
              <a href="/checkout"><h2>PAGAR</h2></a>
         </div>
      </div>
  </div>

</div>
@endsection
