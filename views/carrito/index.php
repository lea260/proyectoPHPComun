<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="<?php echo constant('URL'); ?>public/css/carrito/index.css" rel="stylesheet" type="text/css" media="all">

    <title>carrito</title>
</head>
<body>
<input type="hidden" value="<?php echo constant('URL'); ?>" id="url">
    <?php require 'views/header4log.php';?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h1>Lista del carrito</h1>
        </div><!-- end col-->
      </div><!-- end row-->
      <div class="row" id="itemsCarrito">
        <div id="carritoid"></div>


      </div><!-- end row -->
      <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 p-4">
        <button class="btn btn-success" id="btnCompletarCarrito">completar carrito</button>
      </div>

      <div class="row" id="resPedido" style="display:none">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h1>Resultado del pedido</h1>
            <div class="alert alert-success" role="alert">
              pedido completado con exito <span id="numPedido"></span>
            </div>
        </div><!-- end col-->
      </div><!-- end row-->








    <?php require 'views/footer2.php';?>


    <script src="<?php echo constant('URL'); ?>public/js/jquery-3.6.0.min.js"></script>
    <!-- importo el javascript-->
    <script src="<?php echo constant('URL'); ?>public/js/carrito/index.js"></script>
    <!--<script src="<?php echo constant('URL'); ?>/public/js/main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>