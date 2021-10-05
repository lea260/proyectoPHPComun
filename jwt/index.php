<?php
require_once 'vendor/autoload.php';
require_once 'auth.php';

$key = 'my_secret_key';

if(!isset($_GET['p'])) die('No ha definido la página a visualizar');

$page = strtolower($_GET['p']);

require_once "controllers/$page.php";