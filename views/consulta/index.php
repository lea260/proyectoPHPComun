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

    <?php require 'views/header2.php';?>
    <?php include_once 'models/alumno.php';?>
<input type="hidden" value="<?php echo constant('URL'); ?>" id="url">

<div class="container">
    <div class="row">
        <div class="col-sm">
        Sección de consulta
    </div>
    <div class="row">
        <div class="col-sm">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php

foreach ($this->alumnos as $row) {
    $alumno = new Alumno();
    $alumno = $row;?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $alumno->matricula; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->apellido; ?></td>
                    <td><a class="btn btn-warning" href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Actualizar</a></td>
                    <td><button class="btn btn-danger" data-matricula="<?php echo $alumno->matricula; ?>">Eliminar</button></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>








    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center"></h1>

        <table width="100%" id="tabla">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody id="tbody-alumnos">

        <?php

foreach ($this->alumnos as $row) {
    $alumno = new Alumno();
    $alumno = $row;
    ?>
                <tr id="fila-<?php echo $alumno->matricula; ?>">
                    <td><?php echo $alumno->matricula; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->apellido; ?></td>
                    <td><a class="btn btn-primary" href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Actualizar</a></td>
                    <td><button class="btn btn-primary" data-matricula="<?php echo $alumno->matricula; ?>">Eliminar</button></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
    </div>
    <?php require 'views/footer2.php';?>


    <!-- importo el javascript-->
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>