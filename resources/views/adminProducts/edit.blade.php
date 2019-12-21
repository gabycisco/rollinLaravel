
@extends("plantilla")
@section("titulo_page")
    Editar artículo | Rollin
@endsection
@section("principal")
    <div class="row ">
        <div class="col-10 offset-1 editContainer row">
            <div class="col-12">
                <h1>EDITAR EL ARTÍCULO</h1>
            </div>
            <article class="col-12">
                    
                    <section class="row">
                        <div class="productImg col-3">
                            <label for="img" class="col-12">Imagen</label>
                            <img src="/storage/{{$product->img}}" alt="{{$product->name}}">
                        </div>
                        
                        <form action="" method="post" class="col-7 offset-1 row" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label for="name" class="col-12">Nombre</label>
                            <input type="text" name="name" value="{{$product->name}}" class="campoACompletar col-12" value={{old("name")}}>

                            <label for="brand" class="col-12">Marca</label>
                            <input type="text" name="brand" value="{{$product->brand}}" class="campoACompletar col-12" value={{old("brand")}}>
                            
                            <label for="description" class="col-12">Descripción</label>
                            <textarea name="description"  class="campoACompletar col-12" rows="5" value={{old("description")}}>{!!nl2br($product->description)!!}</textarea>

                            <label for="price" class="col-12">Precio</label>
                            <p>$ <input type="text" name="price" value="{{$product->price}}" class="campoACompletar col-6" value={{old("price")}}></p>   
                            
                            <label for="imgProd" class="col-12">Imagen</label>
                            <input type="file" name="imgProd" class="campoACompletar col-6" value={{old("imgProd")}}>
                            
                            <div class="col-7 offset-5 row">
                                <div class="button-contacto col-5 offset-1">
                                    <a href="/admin/detail/{{$product->id}}">Cancelar</a>  
                                </div>
                                <div class="button-contacto col-5 offset-1">
                                    <input type="submit" name="" value="Guardar">
                                </div>
                                
                            </div>
                        </form>

                    </section>
            </article>
        </div>
    </div>
@endsection
