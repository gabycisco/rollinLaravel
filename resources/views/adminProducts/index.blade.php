@extends("plantilla")
@section("titulo_page")
    Administrador de artículos | Rollin
@endsection
@section("principal")
<div class="row ">
    <div class="col-10 offset-1 editContainer row">
        <div class="col-10">
            <h1>ADMINISTRADOR DE ARTÍCULOS</h1>
        </div>
        <div class="button-contactoClaro col-1 offset-1">
            <a href="/admin/create">Agregar</a>
        </div>
        <article class="col-12">
            @forelse ($products as $product)
                <section class="row">
                    <div class="productImg col-2">
                        <a href="/admin/edit/{{$product->id}}"><img src="/storage/{{$product->img}}" alt="{{$product->name}}"></a>
                    </div>
                    <div class="col-8 row">
                        <div class="productTitle col-12">
                            <a href="/admin/edit/{{$product->id}}"> <h3>{{$product->name}}</h3></a>                        </div>    
                        <div class="productBrand col-12">
                            <a href="/admin/edit/{{$product->id}}"> <p>Marca: {{$product->brand_id}}</p></a>
                        </div>
                        <div class="productPrice col-12">
                            <a href="/admin/edit/{{$product->id}}"> <p>$ {{$product->price}}</p></a>
                        </div>
                    </div>
                    <div class="col-2 row">
                        <div class="button-contacto col-12">
                            <a href="/admin/detail/{{$product->id}}">Detalle</a>                        
                        </div>
                        <button type="button" class="btn buttonModalOk col-12" data-toggle="modal" data-target="#exampleModal">Eliminar</button>
                    </div>
                </section>
                <!-- Modal de Confirmación -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Elimiar - Confirmación</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <b>¿Está seguro de eliminar el artículo {{$product->name}}?</b> <br>
                                Luego de confirmar la operación no será posible recuperar el registro.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn button-contactoClaro" data-dismiss="modal">Cancelar</button>
                                <form action="/admin/destroy" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <button type="button submit" class="btn buttonModalOk" value="Eliminar">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="editsEmpty">
                    <img src="/img/no-products.png" width="70px" alt="">
                    <h4>Todavía no hay cargado ningún artículo.</h4>
                </div>
            @endforelse
            <div class="contenedorPaginacion">
                {{$products->links()}}
            </div>
        </article>
    </div>
</div>




@endsection
