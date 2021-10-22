<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Nombre App</title>
    <!-- vista principal -->
</head>
<body>
<input type="hidden" value="<?=$this->token;?>" id="token">
    <?php require 'views/header4log.php';?>
    <div class="container">
    <div class="row">
        <div class="col-sm">
            <h1>Ingreso</h1>
          <h2><?=$this->token;?> </h2>-->
        </div>
    </div>

    </div>
    <?php require 'views/footer2.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="<?php echo constant('URL'); ?>public/js/login/ingresar.js"></script>
</body>
</html>