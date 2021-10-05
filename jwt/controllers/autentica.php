<?php
$usuario = 'eduardo';
$password = '123456';
if ($usuario === 'eduardo' && $password === '123456') {
    echo Auth::SignIn([
        'id' => 1,
        'name' => 'Eduardo',
        'role' => 'admin',
    ]);
}
