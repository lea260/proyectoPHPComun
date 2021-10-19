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
    <div class="container">
    <div class="row">
        <div class="col-sm">
            <h1>Mail</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <h1><?php echo $this->resultadoLogin; ?></h1>
        </div>
    </div>
        <form class="row" action="<?php echo constant('URL'); ?>login/ingresar" method="post"
        id="form01">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            name="nombre"
            value="juan">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <textarea name="tel[]" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 py-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 py-2">
            <button id="btnEnviar" type="submit" class="btn btn-primary">Enviar alternativo</button>
        </div>
        </form>
    </div>
    <?php require 'views/footer2.php';?>
    <script src="<?php echo constant('URL'); ?>/public/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>