<?php
if(!isset($_GET['t'])) die('Debe especificar el token');

$token = $_GET['t'];

var_dump(
    Auth::GetData(
        $token
    )
);