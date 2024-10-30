<?php

$filename = "\\Users\\User\\OneDrive\\Desktop\\Backend Development\\php 7\\php 7.3\\data\\f1.txt";

if (is_writable($filename)) {
    $fp = fopen($filename, "w+");
    fwrite($fp, "Mercury\n");
    fwrite($fp, "Venus\n");
    fwrite($fp, "Earth\n");
    fclose($fp);
}
