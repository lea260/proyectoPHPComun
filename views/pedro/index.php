<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/main.css">

    <title>Pedro</title>
</head>
<body>

    <?php require 'views/header.php';?>

<input type="hidden" value="<?php echo constant('URL'); ?>" id="url">



    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Sección de Pedro</h1>

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
    <?php require 'views/footer.php';?>
    <!-- importo el javascript-->
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>