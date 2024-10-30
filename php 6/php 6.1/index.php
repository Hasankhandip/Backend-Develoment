<?php

$name = "Samad";

$string01 = "Choclate name is $name \n \tNew Data\n";
echo $string01;

$heredoc = <<<EOD
data 1
new line {$name}
more text
EOD;

echo $heredoc;
