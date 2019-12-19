
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
                        
                        </div>
                        <form action="/admin/create" method="post" class="col-7 offset-1 row" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label for="name" class="col-12">Nombre</label>
                            <input id="name" type="text" name="name" onblur="validarName()" class="campoACompletar col-12" value={{old("name")}}>
                            <br><span class="error" id="nombre"> {{$errors->first("name")}} </span>
                            <br>
                            <label for="brand_id" class="col-12">Marca</label>
                            <input type="text" name="brand_id" class="campoACompletar col-12" value={{old("brand_id")}}>
                            <br><span class="error"> {{$errors->first("brand_id")}} </span>
                            <br>
                            <label for="description" class="col-12">Descripción</label>
                            <textarea name="description" id="textarea" onblur="validarDesc()" class="campoACompletar col-12" rows="5" value={{old("description")}}></textarea>
                            <br><span class="error"id="areatexto"> {{$errors->first("description")}} </span>
                            <br>
                            <label for="price" class="col-12">Precio</label>
                            <p>$ <input type="text" id="price" name="price" onblur="validarPrice()" class="campoACompletar col-6" value={{old("price")}}></p>   
                            <br><span class="error" id="precio"> {{$errors->first("price")}} </span>
                            <br>
                            <label for="imgProd" class="col-12">Imagen</label>
                            <input type="file" name="imgProd" class="campoACompletar col-6" value={{old("imgProd")}}>
                            <br><span class="error"> {{$errors->first("imgProd")}} </span>
                            <br>
                            <div class="button-contacto col-2 offset-10">
                            <input type="submit" name="" value="Enviar">
                            </div>
                        </form>

                    </section>
            </article>
        </div>
    </div>

<script>

function validarName(){
          var input1=document.querySelector('#name');
          if(input1.value==""){
            var spanErrorNombre=document.querySelector('#nombre');
            spanErrorNombre.innerHTML="El nombre del producto es obligatorio y único";
          }else{
            var spanErrorNombre=document.querySelector('#nombre');
            spanErrorNombre.innerHTML="";
          }
        }

        function validarDesc(){
          var input2=document.querySelector('#textarea');
          if(input2.value==""){
            var spanErrorNombre=document.querySelector('#areatexto');
            spanErrorNombre.innerHTML="Escribi una o dos frases atractivas sobre el producto";
          }else{
            var spanErrorNombre=document.querySelector('#areatexto');
            spanErrorNombre.innerHTML="";
          }
        }

        function validarPrice(){
          var input3=document.querySelector('#price');
          if(input3.value==""){
            var spanErrorNombre=document.querySelector('#precio');
            spanErrorNombre.innerHTML="No te olvides de este campo!";
          }else{
            var spanErrorNombre=document.querySelector('#precio');
            spanErrorNombre.innerHTML="";
          }
        }

</script>

@endsection
