<?php $estaLogueado = $_SESSION["estalogueado"];
$nombre = $_SESSION["nombre"];
if ($estaLogueado) {?>
          <a class="btn btn-outline-light" href="#"><?php echo $nombre; ?></a>
          <a class="btn btn-outline-light mx-2" href="<?php echo constant('URL'); ?>login/salir">Salir</a>
<?php } else {
    ?>
        <a class="btn btn-outline-light mx-2" href="<?php echo constant('URL'); ?>login">Ingresar</a>
<?php }
;?>

