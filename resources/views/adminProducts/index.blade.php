@extends("plantilla")
@section("titulo_page")
    Administrador de Artículos | Rollin
@endsection
@section("principal")
<style>
    .editContainer{
        background: #3A3539;
        padding: 35px 35px;
        margin-top: 50px;
        margin-bottom: 50px;
        display:flex;
        justify-content: space-between;
        align-items: center;
    }
    .editContainer section{
        margin-bottom:16px;
        background:white;
        border-radius: 10px;
        display:flex;
        justify-content: center;
        align-items: center;
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
    .editsEmpty{
        margin-bottom:16px;
        background:white;
        border-radius: 10px;
        display:flex;
        justify-content: center;
        align-items: center;
        padding: 32px 20px;
        height:200px;
    }
</style>

<div class="row ">
    <div class="col-10 offset-1 editContainer row">
        <div class="col-10">
            <h1>ADMINISTRADOR DE ARTÍCULOS</h1>
        </div>
        <div class="button-contactoClaro col-1 offset-1">
            <!-- <input type="submit" name="" value="Agregar"> -->
            <a href="/admin/create">Agregar</a>
        </div>
        <article class="col-12">
            @forelse ($products as $product)
                <section class="row">
                    <div class="productImg col-2">
                        <!-- <img src="/img/foto_productos/xiaomi-mi-electric-scooter-m365.jpg" alt=""> -->
                        <a href="/admin/edit/{{$product->id}}"><img src="{{$product->img}}" alt="{{$product->name}}"></a>
                    </div>
                    <div class="col-8 row">
                        <div class="productTitle col-12">
                            <!-- Xiaomi Mi Electric Scooter M365 -->
                            <a href="/admin/edit/{{$product->id}}"> <h3>{{$product->name}}</h3></a>                        </div>    
                        <div class="productBrand col-12">
                            <a href="/admin/edit/{{$product->id}}"> <p>Marca: {{$product->brand_id}}</p></a>
                        </div>
                        <div class="productPrice col-12">
                            <!-- $24,300 -->
                            <a href="/admin/edit/{{$product->id}}"> <p>$ {{$product->price}}</p></a>
                        </div>
                    </div>
                    <div class="col-2 row">
                        <div class="button-contacto col-12">
                            <input type="submit" name="" value="Modificar">
                        </div>
                        <div class="button-contacto col-12">
                            <form action="/admin/destroy" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="submit" name="" value="Eliminar">
                            </form>
                        </div>
                    </div>
                </section>
            @empty
                <div class="editsEmpty">
                    <img src="/img/no-products.png" width="70px" alt="">
                    <h4>Todavía no hay cargado ningún artículo.</h4>
                </div>
            @endforelse
        </article>
    </div>
</div>
@endsection
