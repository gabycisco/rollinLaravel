@extends("plantilla")
@section("titulo_page")
    Gracias por su Mensaje! | Rollin
@endsection
@section("principal")
<div class="row">
  <div class="col-10 offset-1 adminProductContainer row">
      <div class="col-12">
          <h1>Total hasta el momento ${{$cartOwner->amount}}</h1>
            <div class="btn buttonModalOk">
               <a href="/mochila"><h2>PAGAR</h2></a>
            </div>
      </div>
      @foreach ($total as $product)
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
      <div class="btn buttonModalOk">
         <h1>Total hasta el momento ${{$cartOwner->amount}}</h1>
         <div class="">
              <a href="/mochila"><h2>PAGAR</h2></a>
         </div>
      </div>
  </div>

</div>
@endsection
