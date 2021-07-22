<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo constant('URL'); ?>public/css/prueba/index.css" rel="stylesheet" type="text/css" media="all">
    <title>selectores css</title>

</head>
<body>

<h1>Cabecera</h1>

<div class="container">
  <h2>cabecera 2</h2>
  <p>Parrafo dentro de div</p>
  <section>
    <p>parrafo dentro de div secction </p>
  </section>

  </div>
</div>

<div>
  <span><p>I will not be styled.</p></span>
</div>

<p class="colorRojo">Parrafo de color rojo</p>
<span id="hola" >texto span con id hola</span>
<button class="btnHola">agregar</button>
<div id="parrafo5">parrado5</div>
<a id="btnLogin" href="<?=constant('URL');?>login">ir a login</a>
<span class="hola como">con las classes hola como</span>

<div class="cont02">
  <p>parrafo afuera del container</p>
  <div>
    <p>nnnnnnnnnnnnnnnnnnnnnnn</p>
  </div>
  <p>parrafo afuera del container</p>
</div>

<div class="padre">
  <h2>header adentro de padre</h2>
  <p>parrafo adentro de padre</p>
</div>

<p>inmediato al padre</p>

<p>este es el parrfo 02</p>
<div class="padre02">

</div>
<p>parraffo 01</p>
<p>parraffo 02
</p>
</body>
</html>



    <?php require 'views/footer2.php';?>
    <script src="<?php echo constant('URL'); ?>/public/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="<?php echo constant('URL'); ?>/public/js/prueba/index.js"></script>
</body>
</html>