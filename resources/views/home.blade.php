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


    
        <div class="col-lg-12 bienvenidaHome">
            <div>
            <h2>¡CONOCÉ NUESTROS MONOPATINES!</h2>
            </div> 

        </div>
        <div class="botonLinkPrimario">
                <a class="col-12" href="/store">IR A LA TIENDA</a>
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
        <section class="promoDelMes col-lg-5  col-xs-12 row">
            <h2 class="col-12">20% OFF<br>EN TODO EL SITIO!</h2>
            <div class="botonLinkSecundario">
                <a class="col-12" href="/store">IR A LA TIENDA</a>
            </div>
        </section>
    </div>
    <section class="row newslater">
        <article class="col-lg-7 col-xs-12">
            <h2 style="text-align: left">QUERÉS ENTERARTE DE NOVEDADES Y OFERTAS EXCLUSIVAS? <br>
            SUSCRIBITE A NUESTRO NEWSLETTER!</h2>
        </article>
        <article class="formularioNews col-lg-5  col-xs-12 row">
                <ul style='color:red' class='errores'>
                    @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                </ul>
            <form method='POST' action='/NLEnviado' class="col-12 row">
                {{csrf_field()}}
                <div class="col-10 offeset-1" style="padding: 0;" >   
                    <input type="email" class="form-control" placeholder="e-mail" name='email' value='{{old("email")}}'>
                </div>
                <div class="col-1" >
                    <button  type="submit" class="btn">ENVIAR</button>
                </div>
            </form>
        </article>
    </section>
@endsection
