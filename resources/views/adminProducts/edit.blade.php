
@extends("plantilla")
@section("titulo_page")
    Detalle | Rollin
@endsection
@section("principal")
<style>
    .adminProductContainer{
        background: #3A3539;
        padding: 35px 35px;
        margin-top: 50px;
        margin-bottom: 50px;
        display:flex;
        justify-content: space-between;
        align-items: center;
    }
    .adminProductContainer section{
        margin-bottom:16px;
        background:white;
        border-radius: 10px;
        display:flex;
        justify-content: center;
        align-items: flex-start;
        padding: 32px 20px;
    }
    .productTitle,.productPrice{
        font-size:20px;
    }
    .productImg img{
        width:100px;
        background: white;
    }
    h1{
        color: #E8D8BE;
        text-align: left;
        font-size: 3em;
        font-family: futuralightc;
        text-decoration: none;
        text-shadow: 2px 2px 2px #EF3E3A;
    }
</style>
<div class="row ">
    <div class="col-10 offset-1 adminProductContainer row">
        <div class="col-12">
            <h1>DETALLE DEL ARTÍCULO</h1>
        </div>
        <article class="col-12">
                <section class="row">
                    <div class="productImg col-2">
                      <img src="/storage/{{$product->img}}" alt="{{$product->name}}">
                    </div>
                    <div class="col-8 row">
                        <div class="productTitle col-12">
                            <h3>{{$product->name}}</h3>
                        </div>
                        <div class="productBrand col-12">
                            <p>Marca: {{$product->brand_id}}</p>
                        </div>
                        <div class="productDescription col-12">
                            <p>Detalle:</p>
                          <p>{!!nl2br($product->description)!!}</p>
                        </div>
                        <div class="productPrice col-12">
                           <p>$ {{$product->price}}</p>
                        </div>
                    </div>
                    <div class="col-2 row">
                        <div class="button-contacto col-12">
                            <input type="submit" name="" value="Modificar">
                        </div>
                        <div class="button-contacto col-12">
                            <form action="/deleteProduct" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="submit" name="" value="Eliminar">
                            </form>
                        </div>
                    </div>
                </section>
        </article>
    </div>
</div>
@endsection
