<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/main.css">

    <title>Document</title>
</head>
<body>

    <?php require 'views/header.php';?>

    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Actualizar <?php echo $this->alumno->matricula; ?></h1>

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

    <?php require 'views/footer.php';?>

</body>
</html>