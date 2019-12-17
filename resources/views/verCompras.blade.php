@extends("plantilla")
@section("titulo_page")
    Lista de Compras | Rollin
@endsection
@section("principal")
<div class="row ">
    <div class="col-10 offset-1 editContainer row">
        <div class="col-10">
            <h1>COMPRAS REALIZADAS</h1>
        </div>
        
        <article class="col-12">
            @forelse ($compras as $compras)
                <section class="row">
                    
                    <div class="col-8 row">
                        <div class="productTitle col-12">
                         <h3>ID Compra: {{$compras->cart_id}}</h3>                      
                        </div>
                        <div class="productPrice col-12">
                            <p>Fecha: {{$compras->created_at}}</p>
                        </div>    
                        <div class="productBrand col-12">
                        <p>Products: {{$compras->product_id}}</p>
                        </div>
                        <div class="productPrice col-12">
                            <p>Total: ${{$compras->price}}</p>
                        </div>
                    </div>
                   
                </section>
              
            @empty
                <div class="editsEmpty">
                    <img src="/img/no-products.png" width="70px" alt="">
                    <h4>Todavía no compraste ningun artículo.</h4>
                </div>
            @endforelse
            
        </article>
    </div>
</div>




@endsection