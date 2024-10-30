<?php


$name = "Dip Khan 01728869102 hasankhandip@gmail.com";
$parts = sscanf($name, "%s %s %11s %s");
print_r($parts);

sscanf($name, "%s %s %11s %s", $fname, $lname, $mobile, $email);
echo $fname . "\n";
echo $lname . "\n";
echo $mobile . "\n";
echo $email . "\n";


$hexColor = "#FF2F44";
sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);
echo $red . "\n";
echo $green . "\n";
echo $blue;
