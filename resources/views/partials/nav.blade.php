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
                <h3 class="nav-link">Bienvenido, {{Auth::user()->name}} </h3>
              </li>
              <li class="nav-item">
              <a href="/perfil/{{Auth::user()->id}}" class="nav-link">Perfil</a>
              </li>
              <li class="nav-item">
                <a href="/logout" class="nav-link">Cerrar sesión</a>
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
          <li class="nav-item">
            <a class="nav-link" href='/mochila'>
              <img src="/img/vector_mochila.png" width="30px" id="logo">
            </a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
  <!-- FINAL DEL NAVBAR  -->
