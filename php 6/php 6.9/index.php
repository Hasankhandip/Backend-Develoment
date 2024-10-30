<?php

$string = "Lorem000000000000000000000000000000000000000000000000000000000000 ipsum dolor sit amet consectetur adipisicing elit. Perferendis iste consectetur eos cupiditate nam quo fugiat animi porro eveniet officiis voluptatem reiciendis quaerat, reprehenderit tempore eum sint libero sed in culpa, quos magnam, sequi nihil vel? Dolorum consequatur quod dolores soluta odit totam earum explicabo aspernatur architecto aperiam. Animi, velit?";

echo wordwrap($string, 30, "<br/>", true);
