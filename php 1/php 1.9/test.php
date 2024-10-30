<?php

/*
Decimal = %d
binary = %b
Hexadecimal = %x
Hexadecimal = %X for Uppercase
octal = %o
*/


$n = 12; //decimal
$o = 012; //octal
$h = 0x1B; //hexadecimal

printf("The number is %d,%d and %d \n", $n, $o, $h);

printf("The Binary equivalent of %d is %b \n", 1212, 1212);
printf("The Hexadecimal equivalent of %d is %x \n", 1212, 1212);
printf("The Hexadecimal equivalent of %d is %X \n", 1212, 1212);
printf("The Octal equivalent of %d is %o \n", 27, 27);

printf("Octal %o = %d \n", 0200000, 0200000);

printf("Decimal %d to Hexadecimal %x \n", 999, 999);
printf("Decimal %d to Binary %b \n", 999, 999);
printf("Decimal %d to Octal %o \n", 999, 999);
