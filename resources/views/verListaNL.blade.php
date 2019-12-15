@extends("plantilla")
@section("titulo_page")
    Lista Subscriptores | Rollin
@endsection
@section("principal")
<div class="row ">
    <div class="col-10 offset-1 editContainer row">
        <div class="col-10">
            <h1>SUBSCRIPCIONES NEWSLETTER</h1>
        </div>
        <article class="col-12">
            @forelse ($subscriber as $subscriber)
            
                <section class="row">
                    <div class="col-12 row">
                        <div class="productTitle col-12">
                        <h4>{{$subscriber->email}}</h4>                       
                        </div> </div>   
                </section>
            @empty
                <div class="editsEmpty">
                    <img src="/img/no-products.png" width="70px" alt="">
                    <h4>Todavía no hay nadie subscripto.</h4>
                </div>
            @endforelse
            
        </article>
    </div>
</div>




@endsection
