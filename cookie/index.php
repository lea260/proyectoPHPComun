<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php $var02 = "idioma";?>
  <?php $id = $var ?? "es";?>
  <h1><?=$id;?></h1>

  <?php $id = $_COOKIE['idioma'] ?? "defecto";?>
  <br>
   <h1><?=$id;?></h1>
</body>
</html>
