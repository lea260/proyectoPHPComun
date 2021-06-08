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

    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">la mejor cabecera <?php echo $this->alumno->matricula; ?></h1>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno/" method="POST">
            <label for="">Matrícula</label><br>
            <!-- el disabled provoca que no se cargue en el el campo
            matricula -->
            <input type="text" disabled name="matricula" id="" value="<?php echo $this->alumno->matricula; ?>"><br>
            <label for="campoAlumno" >Nombre</label><br>
            <input id="campoAlumno" type="text" name="nombre" value="<?php echo $this->alumno->nombre; ?>"><br>
            <label for="">Apellido</label><br>
            <input type="text" name="apellido" value="<?php echo $this->alumno->apellido; ?>"><br>
            <input type="submit" value="Crear nuevo alumno">
        </form>
    </div>

    <?php require 'views/footer2.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>