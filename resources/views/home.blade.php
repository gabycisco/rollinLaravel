@extends("plantilla")
@section("titulo_page")
    Home | Rollin
@endsection
@section("principal")
    <div class="row portadaHome">
    

    <div class="principalFondoVideo">
      <div class="videoFondoBlur"></div>
      <video class="videoFondo" src="video/background.mp4" autoplay loop muted width="100%"> autoplay loop</video>
    </div>


    
        <div class="col-md-12 bienvenidaHome">
            <div>
            <h2>¡CONOCÉ NUESTROS MONOPATINES!</h2>
            </div> 

        </div>
        <div class="botonLinkPrimario">
                <a class="col-12" href="/product">IR A LA TIENDA</a>
            </div>
    </div>
    <div class="row listArticulos">
        <section class="imgProductos col-lg-7 col-xs-12 row">
            <article class="col-lg-6 col-xs-12">
                <img src="/img/1.png" width="100%" alt="">
            </article>
            <article class="col-lg-6 col-xs-12">
                <img src="/img/4.png" width="100%" alt="">
            </article>
            <article class="col-lg-6 col-xs-12">
                <img src="/img/2.png" width="100%" alt="">
            </article>
            <article class="col-lg-6 col-xs-12">
                <img src="/img/3.png" width="100%" alt="">
            </article>
        </section>
        <section class="promoDelMes col-md-5  col-xs-12 row">
            <h2 class="col-12">20% OFF<br>EN TODO EL SITIO!</h2>
            <div class="botonLinkSecundario">
                <a class="col-12" href="#">IR A LA TIENDA</a>
            </div>
        </section>
    </div>
    <div class="row newslater">
        <section class="col-lg-7 col-xs-12  row">
            <article class="col-lg-12 col-xs-12">
                <h2 style="text-align: left">QUERÉS ENTERARTE DE NOVEDASDES Y OFERTAS EXCLUSIVAS? <br>
                SUSCRIBITE A NUESTRO NEWSLETTER!</h2>
            </article>
        </section>
        <section class="formularioNews col-md-5  col-xs-12 row">
            <form class="col-12 row">
                <div class="col-11" style="padding: 0;" >
                    <input type="email" class="form-control" placeholder="  e-mail">
                </div>
                <div class="col-1" >
                    <button  type="submit" class="btn">ENVIAR</button>
                </div>
            </form>
        </section>
    </div>
@endsection
