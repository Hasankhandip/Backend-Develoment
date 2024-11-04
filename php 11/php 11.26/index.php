<?php

// function autoload($name)
// {
//     include strtolower("{$name}.php");
// }


function autoload($name)
{
    if (strpos($name, "planet_") !== false) {
        $filename = str_replace("planet_", "", $name);
        include strtolower("planets/{$filename}.php");
    } else {
        include strtolower("{$name}.php");
    }
}


spl_autoload_register('autoload');

(new spaceShip)->launch();
echo PHP_EOL;
(new bike)->getType();
echo PHP_EOL;
(new planet_Mars)->getName();
