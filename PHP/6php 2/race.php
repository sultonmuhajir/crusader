<?php
/*
|--------------------------------------------------------------------------
| Tortoise racing
|--------------------------------------------------------------------------
|
*/

function race($v1, $v2, $g) {
   if ($v1 >= $v2) return null;
   $time = intval($g * 3600 / ($v2 - $v1));
   return [floor($time / 3600), floor(($time % 3600) / 60), $time % 60];
}


function race($v1, $v2, $g) {
   return ($v1>=$v2)?null:explode(':',gmdate("H:i:s", 3600*$g/($v2-$v1)));
}


function race($v1, $v2, $g) {
   if ($v1 >= $v2) return null;
   $h = $g/($v2-$v1);
   return explode (':',gmdate("H:i:s", floor($h*3600)));
}


print_r(race(720, 850, 70));
print_r(race(80, 91, 37));
print_r(race(80, 100, 40));
print_r(race(720, 850, 37));