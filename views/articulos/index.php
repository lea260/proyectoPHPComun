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
        <h1>Sección de consulta</h1>
    </div>
    <div class="row">
        <div class="col-sm table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">descripcion</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Precio</th>
                    <th scope="col">fecha</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php

foreach ($this->articulos as $row) {
    $articulo = new Alumno();
    $articulo = $row;?>
                <tr id="filaart-<?php echo $articulo->id; ?>">
                    <td><?php echo $articulo->id; ?></td>
                    <td><?php echo $articulo->codigo; ?></td>
                    <td><?php echo $articulo->descripcion; ?></td>
                    <td><?php echo $articulo->precio; ?></td>
                    <td><?php echo $articulo->fecha; ?></td>
                    <td><a class="btn btn-warning" href="<?php echo constant('URL') . 'articulos/verArticulo/' . $articulo->id; ?>">Actualizar</a></td>
                    <td><button class="btn btn-danger btnEliminar" data-alumno="<?php echo $articulo->id; ?>"
                    id="art<?php echo $articulo->id; ?>">Eliminar</button></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>


    <?php require 'views/footer2.php';?>



    <!-- importo la libreria jquery-->
    <script src="<?php echo constant('URL'); ?>public/js/jquery-3.6.0.min.js"></script>
    <!-- importo el javascript-->
    <script src="<?php echo constant('URL'); ?>public/js/articulos/index02.js"></script>
    <!--<script src="<?php echo constant('URL'); ?>/public/js/main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>