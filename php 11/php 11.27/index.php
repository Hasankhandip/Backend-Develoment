<?php

namespace Astronomy;

include "planet.php";
include "earth.php";
// $planet = new Planets\Planet(); //Unqualified
// $planet = new \Astronomy\Planets\Planet(); //qualified
$planet = new Planets\Earth();
$planet->getName();
