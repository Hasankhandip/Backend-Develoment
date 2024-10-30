<?php

$filename = "/Users/User/OneDrive/Desktop/Backend Development/php 7/php 7.5/data/f1.txt";

/*
file_put_contents($filename, "\nMars\n", FILE_APPEND);
file_put_contents($filename, "Jupiter\n", FILE_APPEND);
*/

/*
file_put_contents($filename, "\nMars\n", LOCK_EX);
file_put_contents($filename, "Jupiter\n", LOCK_EX);
*/


file_put_contents($filename, "\nMars\n", FILE_APPEND | LOCK_EX);
file_put_contents($filename, "Jupiter\n", FILE_APPEND | LOCK_EX);
