@extends("plantilla")
@section("titulo_page")
    Tu Mochila | Rollin
@endsection
@section("principal")

<div class="row"> 
<section class="col-12">
    <br><br>
          <span class="mochilaTitulo">TU MOCHILA</span>  
        </section>
<div class="row">
    <div class="contenedorPerfil col-lg-9 offset-lg-1 col-xs-12 row">

        <section class="col-lg-5 col-xs-12 row contenedorImagenPerfil">
          <div class="col-12 contenedorImagenPerfil1">
            <img src="/img/contactoDefault.png" width="83%" alt="contactoFotoDefault">
          </div>    
          <div class="col-12 contenedorImagenPerfil2">
            
          </div>
        </section>

        <section class="col-lg-7 col-xs-12">
        <br>
        <br>
          <h3>NOMBRE PRODUCTO</h3>
          <br>
          <p>DESCRIPCION PRODUCTO</p>
          <p>PRECIO </p>
          <p>CANTIDAD</p>
          <br>
          <div class="BOTONROJO botonPerfil1">
            <a href="#">COMPRAR</a>
          </div>
          
        </section>
        
      </div>
      
    </div>
    <div class="contenedorVoucher col-lg-2 col-xs-12 row">
    <p id="voucher">TENÉS UN VOUCHER?</p>
    <P>VALIDALO ACÁ!</P>
    <input type="text">    
  </div>

@endsection