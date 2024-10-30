<?php

$year = 2023;

if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leapyear \n";
} elseif ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not a leapyear \n";
} elseif ($year % 4 == 0) {
    echo "{$year} is a leapyear \n";
} else {
    echo "{$year} is not a leapyear \n";
}

// another shortcut way

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is a leapyear \n";
} else {
    echo "{$year} is not a leapyear \n";
}


if (false && true) {
    echo "false1 \n";
}
if (false && false) {
    echo "false2 \n";
}
if (true && true) {
    echo "true3 \n";
}
if (false || true) {
    echo "false4 \n";
}
if (false || false) {
    echo "false5 \n";
}
if (true && true) {
    echo "true6 \n";
}
