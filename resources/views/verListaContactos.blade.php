@extends("plantilla")
@section("titulo_page")
    Lista de Mensajes | Rollin
@endsection
@section("principal")
<div class="row ">
    <div class="col-10 offset-1 editContainer row">
        <div class="col-10">
            <h1>Mensajes de Contacto</h1>
        </div>
        <article class="col-12">
            @forelse ($contact as $contact)
                <section class="row">
                    <div class="col-12 row">
                        <div class="productTitle col-12">
                            <h4>{{$contact->name}}</h4>
                        </div>    
                        <div class="productBrand col-12">
                         <p>{{$contact->email}}</p>
                        </div>
                        <div class="productPrice col-12">
                            <p>{{$contact->message}}</p>
                        </div>
                    </div>                        
                </section>
               
            @empty
                <div class="editsEmpty">
                    <img src="/img/no-products.png" width="70px" alt="">
                    <h4>Todavía nadie trato de contactarse.</h4>
                </div>
            @endforelse
            
        </article>
    </div>
</div>

@endsection
