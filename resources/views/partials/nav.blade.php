<?php

$navItems =
[
    0 => [
      "name" => "Entrar",
      "url" => "/login",
    ],
    1 => [
      "name" => "Registrase",
      "url" => "/register",
    ],
];
?>
<!-- NAVBAR  -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-toggleable-md ">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/img/logo_fondo_transparente.png" width="120px" id="logo">
      </a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#Content" aria-controls="Content" aria-expanded="false" aria-label="Toggle navigation" id="toggleButton">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="Content" >

        <ul class="nav navbar-nav ml-auto">
          <?php foreach ($navItems as $item) :?>
            <?php if (Auth::user() != null): ?>
              <li class="nav-item">
                <!-- <h3 class="nav-link">Bienvenido, {{Auth::user()->name}} </h3> -->
                <a href="/perfil/{{Auth::user()->id}}" class="nav-link saludo">Bienvenido, {{Auth::user()->name}}</a>
              </li>
              <li class="nav-item">
              <a href="/perfil/{{Auth::user()->id}}" class="nav-link">Perfil</a>
              </li>
              <li class="nav-item">
                <a href="/logout" class="nav-link">Cerrar Sesión</a>
              </li>
              <?php break;?>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link" href="<?=$item['url']?>">
                  <?= $item["name"]?>
                </a>
              </li>
            <?php endif; ?>

          <?php endforeach ;?>
          @auth
          @if(Auth::user()->admin==0)
          <li class="nav-item">
            <a class="nav-link" href='/mochila'>
              <img src="/img/vector_mochila.png" width="30px" id="logo">
            </a>
          </li>
          @endif
          @endauth
          @auth
            @if (Auth::user()->admin)
            <!--<li class="nav-item">
              <a class="nav-link" href='' id="menu" onclick="ver()" onmouseout="ocultar()">
                <img src="/img/admin-nav.png" width="30px" id="logo"  >
              </a>
            </li>-->
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"  style="background-color:#3A3539; margin-top:5px;margin-left:10px;">
                <img src="/img/admin-nav.png" width="30px" id="logo" >
                </a>
            <div class="dropdown-menu "style="background-color:#3A3539">
                <a class="dropdown-item" style="background-color:#3A3539" href="/admin">Administrar Productos</a>
                <a class="dropdown-item" style="background-color:#3A3539" href="/verListaContactos">Ver Mensajes</a>
                <a class="dropdown-item" style="background-color:#3A3539" href="/verListaNL">Ver Subscriptores</a>
            </div>
            </div>
          @endif
         @endauth
        </ul>

      </div>
    </div>
  </nav>
