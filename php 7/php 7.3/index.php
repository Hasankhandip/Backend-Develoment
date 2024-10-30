<?php

$filename = "/Users/User/OneDrive/Desktop/Backend Development/php 7/php 7.2/data/f1.txt";

// $existingData = file_get_contents($filename);
// $fp = fopen($filename, "w");
// fwrite($fp, $existingData);
// fwrite($fp, "Mercury\n");
// fwrite($fp, "Venus\n");
// fwrite($fp, "Earth\n");
// fclose($fp);



$fp = fopen($filename, "a");
fwrite($fp, "Mercury\n");
fwrite($fp, "Venus\n");
fwrite($fp, "Earth\n");
fclose($fp);
