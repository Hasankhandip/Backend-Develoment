<?php

$filename = "/Users/User/OneDrive/Desktop/Backend Development/php 7/php 7.4/data/f1.txt";

/*
$fp = fopen($filename, "r+");
$line = fgets($fp);
echo $line;
fwrite($fp, "Uranus\n");
$line = fgets($fp);
echo $line;
fseek($fp, 0); //rewind($fp);
fwrite($fp, "Venus");
fclose($fp);
*/

/*
$fp = fopen($filename, "w+");
fwrite($fp, "Uranus\n");
rewind($fp);
$line = fgets($fp);
echo $line;
*/


$fp = fopen($filename, "a+");
fwrite($fp, "\nUranus\n");
rewind($fp);
fwrite($fp, "Neptune\n");
$line = fgets($fp);
echo $line;
