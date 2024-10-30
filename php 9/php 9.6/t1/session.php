<?php
session_name('ourapp');
session_start([
    'cookie_domain' => '.http://localhost:3000/php%209/php%209.6/session.php',
    'cookie_path' => '/'
]);
$_SESSION['data2'] = 'Hello Earth';
