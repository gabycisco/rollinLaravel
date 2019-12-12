
@extends("plantilla")
@section("titulo_page")
    Detalle | Rollin
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
        background: #E8D8BE;
        border-radius: 10px;
        display:flex;
        justify-content: center;
        align-items: flex-start;
        padding: 50px 0px 50px 0px;
    }

    .productTitle,.productPrice{
        font-size:20px;
    }

    .campoACompletar{
        margin-bottom:30px;
    }

    .productImg img{
        width:100%;
        border-radius: 10px;
        border: 2px solid #3A3539;

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
        <div class="col-10 offset-1 editContainer row">
            <div class="col-12">
                <h1>CREADOR DE ARTÍCULOS</h1>
            </div>
            <article class="col-12">
                    
                    <section class="row">
                        <div class="productImg col-3">
                            <label for="img" class="col-12">Imagen</label>
                            <img src="/img/no-photo.png" width="100%" alt="">
                        </div>
                        <div>
                        <ul style='color:red' class='errores'>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </ul>
                        </div>
                        <form action="/admin/create" method="post" class="col-7 offset-1 row" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label for="name" class="col-12">Nombre</label>
                            <input type="text" name="name" class="campoACompletar col-12" value={{old("name")}}>

                            <label for="brand_id" class="col-12">Marca</label>
                            <input type="text" name="brand_id" class="campoACompletar col-12" value={{old("brand_id")}}>
                            
                            <label for="description" class="col-12">Descripción</label>
                            <textarea name="description" class="campoACompletar col-12" rows="5" value={{old("description")}}></textarea>

                            <label for="price" class="col-12">Precio</label>
                            <p>$ <input type="text" name="price" class="campoACompletar col-6" value={{old("price")}}></p>   
                            
                            <label for="imgProd" class="col-12">Imagen</label>
                            <input type="file" name="imgProd" class="campoACompletar col-6" value={{old("imgProd")}}>
                            
                            <div class="button-contacto col-2 offset-10">
                            <input type="submit" name="" value="Enviar">
                            </div>
                        </form>

                    </section>
            </article>
        </div>
    </div>
@endsection
