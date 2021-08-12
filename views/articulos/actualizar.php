
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>Document</title>
</head>
<body>
<input type="hidden" value="<?php echo constant('URL'); ?>" id="url">
    <?php require 'views/header4log.php';?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h1>Resultado actulalizar</h1>
          <?php if ($this->respuesta) {;?>
      <div class="alert alert-success" role="alert">
        articulo actualizado con exito
      </div>
      <?php } else {
    ;?><div class="alert alert-danger" role="alert">
    error al actualizar
  </div>
<?php }
;?>
        </div><!-- end col-->
      </div><!-- end row-->
    </div><!-- end container-->




    <?php require 'views/footer2.php';?>


    <!-- importo el javascript-->
    <script src="<?php echo constant('URL'); ?>/public/js/articulos/actualizar.js"></script>
    <!--<script src="<?php echo constant('URL'); ?>/public/js/main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>