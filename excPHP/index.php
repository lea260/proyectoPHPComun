<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php require "OperacionSalgoInsuficiente.php";
require_once "Cuenta.php";?>
  <?php try {
    //code...
    $cuenta = new Cuenta("Juan", 5000);
    $cuenta->depositar(500);
    $cuenta->retirar(400);
    echo "<h1>" . $cuenta->getTitular() . " tiene saldo:" . $cuenta->getSaldo() . "</h1>";
    $cuenta = new Cuenta("Ricardo");
    $cuenta->depositar(500);
    $cuenta->retirar(50);
    echo "<h1>" . $cuenta->getTitular() . " tiene saldo:" . $cuenta->getSaldo() . "</h1>";
} catch (OperacionSalgoInsuficiente $ex) {
    //throw $th;
    echo "<h1>" . $ex->getMessage() . "</h1>";
} catch (Exception $ex) {
    //throw $th;
    echo "<h1>" . $ex->getMessage() . "</h1>";
}
;?>


</body>
</html>
