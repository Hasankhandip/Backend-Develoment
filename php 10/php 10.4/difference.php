<?php
$d1 = new DateTime('26 Sep 2004');
$d2 = new DateTime('29 Oct 2024');
$difference = date_diff($d1, $d2);
// $difference = $d1->diff($d2);
echo $difference->format("%y Year %m Month %d Days");
