<?php
session_name('ourapp');
session_start([
    'cookie_domain' => '.http://localhost:3000/php%209/php%209.6/session.php',
    'cookie_path' => '/'
]);
echo $_SESSION['data'];
echo "<br/>";
echo $_SESSION['data2'];
