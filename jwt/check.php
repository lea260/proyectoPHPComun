<?php
require_once 'vendor/autoload.php';
require_once 'auth.php';
use Firebase\JWT\JWT;
$token = $_GET['t'];
try {
    //code...
    Auth::Check($token);
    echo "<h1>" . "autorizado" . "</h1>";
    var_dump(Auth::GetData($token));
    echo "<br/>";
    echo Auth::GetData($token)->role;
} catch (Exception $e) {
    echo "<h1>" . $e->getMessage() . "</h1>";
}

echo "<h1>" . "entro" . "</h1>";
