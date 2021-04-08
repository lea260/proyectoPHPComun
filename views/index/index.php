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
        <h1 class="center">Bienvenido al sitio</h1>
        <h1 class="center"><?php echo $_SERVER['SERVER_NAME']; ?></h1>
        <h1 class="center"><?php echo constant('URL'); ?></h1>

    </div>

    <?php require 'views/footer.php';?>

</body>
</html>