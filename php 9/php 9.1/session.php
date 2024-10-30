<?php

// session_destroy(); //session stop korar jonne

/*
session_start();
$_SESSION['counter'] = $_SESSION['counter'] ?? 0;
$_SESSION['counter']++;
echo $_SESSION['counter'];
*/

session_name('myapp');
session_start([
    'cookie_lifetime' => 60
]);
$_SESSION['name'] = 'Dip';
echo $_SESSION['name'];
