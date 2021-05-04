<nav class="navbar navbar-expand-lg navbar-dark bg-primary ps-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo constant('URL'); ?>index">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?php echo constant('URL'); ?>consulta">Consulta</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lista
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>pedro">Pedro</a></li>
            <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>axel">Axel</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>leandro">Leandro</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>


      </ul>
      <div class="d-flex">
      <?php $estaLogueado = $_SESSION["estalogueado"];
if ($estaLogueado) {
    ?><?php $nombre = $_SESSION["nombre"];?>
          <a class="btn btn-outline-light" href="#"><?php echo $nombre; ?></a>
          <a class="btn btn-outline-light mx-2" href="<?php echo constant('URL'); ?>login/salir">Salir</a>
<?php } else {
    ?>
        <a class="btn btn-outline-light mx-2" href="<?php echo constant('URL'); ?>login">Ingresar</a>
<?php }
;?>

      </div>
    </div>
  </div>
</nav>
