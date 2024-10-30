<?php

$filename = "/Users/User/OneDrive/Desktop/Backend Development/php 7/php 7.1/data/f1.txt";

// echo getcwd();

$fp = fopen($filename, 'r');
while ($line = fgets($fp)) {
    echo $line;
}
echo PHP_EOL;
echo PHP_EOL;

//rewind($fp);
fseek($fp, 8);
// fseek($fp, -1, SEEK_END);
while ($line = fgets($fp, 5)) {
    echo $line . "_";
}
fclose($fp);

