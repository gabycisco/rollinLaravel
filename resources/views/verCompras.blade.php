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
                <section class="row">
            @forelse ($carritosCerrados as $carritoCerrado )
                    
                    <div class="col-8 row">
                        <div class="productTitle col-12">
                         <h3>ID Compra: {{$carritoCerrado->id}}</h3>                      
                        </div>
                        <div class="productPrice col-12">
                            <p>Fecha: {{$carritoCerrado->created_at}}</p>
                        </div>   
                        <div class="productBrand col-12">
                        </div>
                        @foreach($carritoCerrado->products as $product)
                        <p>Products: {{$product->name}}</p>
                        @endforeach
                        <div class="productPrice col-12">
                            <p>Total: ${{$carritoCerrado->amount}}</p>
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