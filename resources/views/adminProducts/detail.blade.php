
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
                        <a href="/admin/edit/{{$product->id}}">Modificar</a>  
                        </div>
                        <button type="button" class="btn buttonModalOk col-12" data-toggle="modal" data-target="#exampleModal">Eliminar</button>
                        <div class="button-contacto col-12">
                        <a href="/admin">Volver</a>  
                        </div>
                    </div>
                </section>
        </article>
    </div>
</div>
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
@endsection
