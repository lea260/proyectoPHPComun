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

    <?php require 'views/header4log.php';?>
    <?php include_once 'entidades/alumno.php';?>
<input type="hidden" value="<?php echo constant('URL'); ?>" id="url">
<!--hidden -->
<div class="container">
    <div class="row">
        <div class="col-sm">
        <h1>Sección de idioma</h1>
    </div>

    <form class="row" action="<?php echo constant('URL'); ?>idioma/cambiarIdioma" method="post"
        id="form01">
        <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1" name="idioma">
          <option>es</option>
          <option>en</option>
        </select>
      </div>


        <div class="col-lg-12 col-md-12 col-sm-12 py-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>




    <?php require 'views/footer2.php';?>



    <!-- importo la libreria jquery-->
    <script src="<?php echo constant('URL'); ?>/public/js/jquery-3.6.0.min.js"></script>
    <!-- importo el javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>