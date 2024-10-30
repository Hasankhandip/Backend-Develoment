<?php
echo time();
echo PHP_EOL;
echo mktime(0, 0, 0, 12, 1, 2018);
echo PHP_EOL;
date_default_timezone_set('Asia/Dhaka');
echo PHP_EOL;
echo mktime(0, 0, 0, 12, 1, 2018);
echo PHP_EOL;
echo gmmktime(0, 0, 0, 12, 1, 2018);
echo PHP_EOL;
echo (22400 - 800) / (60 * 60);
echo PHP_EOL;
echo (mktime(0, 0, 0, 12, 10, 2018) - mktime(0, 0, 0, 11, 30, 2018)) / (24 * 60 * 60);
echo PHP_EOL;
