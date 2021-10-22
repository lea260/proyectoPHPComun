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

<div class="container">
    <div class="row">
        <div class="col-sm">
        <h1>Sección Incial</h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d409.8758753478795!2d-56.218625241978096!3d-34.7302178643609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a1d2bb0d94746b%3A0x233db8c6106abffa!2sEscuela%20T%C3%A9cnica%20de%20Las%20Piedras!5e0!3m2!1ses!2suy!4v1634078326819!5m2!1ses!2suy" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


    <?php require 'views/footer2.php';?>


    <!-- importo el javascript-->
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>