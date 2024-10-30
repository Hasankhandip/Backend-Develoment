<?php

echo mktime(0, 0, 0, 12, 12, 2018);
echo PHP_EOL;
echo strtotime("12 December 2018");
echo PHP_EOL;
echo time();
echo PHP_EOL;
echo strtotime("now");
echo PHP_EOL;
echo strtotime("+3days");
echo PHP_EOL;
echo (strtotime("+3days") - strtotime("now")) / (86400);
echo PHP_EOL;
echo (strtotime("+2weeks 7days") - strtotime("now")) / (86400);
echo PHP_EOL;
echo (strtotime("+2weeks 7days 24hours") - strtotime("now")) / (86400);
echo PHP_EOL;
echo (strtotime("+2weeks 7days 24hours 86400 seconds") - strtotime("now")) / (86400);
echo PHP_EOL;
echo date('H:i:s A', strtotime('13 August 2005 11:12:05 PM'));
echo PHP_EOL;
