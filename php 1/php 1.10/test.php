<?php

$fname = "Hasan";
$mname = "Masfique";
$lname = "Khan";

printf("His name is %s %s %s", $fname, $mname, $lname);
echo "\n";
printf('His name is %2$s %1$s %3$s', $fname, $mname, $lname);
echo "\n";

printf("The binary equivalent of %d is %b", 12, 12);
echo "\n";
printf('The binary equivalent of %1$d is %1$b', 12);
echo "\n";


$n = 45.1224;
printf("%.2f", $n);
echo "\n";


$a = 123;
$b = 27;

printf("%04d", $a);
echo "\n";
printf("%04d", $b);
echo "\n";

$c = 123.3253;
$d = 27.155;

printf("%08.2f", $c);
echo "\n";
printf("%08.2f", $d);
