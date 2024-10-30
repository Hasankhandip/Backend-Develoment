<?php
$string = "Quick brown Brown fox Fox jumps over the lazy dog";
// $replacedString = str_replace('brown', 'cow', $string);
// $replacedString = str_ireplace('fox', 'cat', $string, $count);
// $replacedString = str_ireplace(array('brown', 'fox', 'dog'), array('red', 'cat', 'hen'), $string, $count);
$replacedString = str_ireplace(array('brown', 'fox', 'dog'), '_word_', $string, $count);
echo $string;
echo PHP_EOL;
echo $replacedString;
echo PHP_EOL;
echo "Total Replace:{$count}";
