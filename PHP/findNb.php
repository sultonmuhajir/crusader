<?php
/*
|--------------------------------------------------------------------------
| Build a pile of Cubes
|--------------------------------------------------------------------------
|
*/

function findNb($m) {
   $n = 0;
   $x = 0;
   while ($x < $m) {
      $n += 1;
      $x += pow($n, 3);
   }
   return $x == $m ? $n : -1;
}


function findNb($m) {
   $n = (sqrt(8 * sqrt($m) + 1) - 1) / 2;
   return $n == (int)$n ? $n : -1;
}


function findNb($m) {
   $n = 0;
   while($m > 0)
      $m -= pow(++$n, 3);
   return $m == 0 ? $n : -1;
}


function findNb($m) {
   $n = (sqrt(8*sqrt($m)+1)-1)/2;
   return $n===floor($n)?$n:-1;
}


print_r(findNb(4183059834009) . ' ' . 2022 . '
');
print_r(findNb(24723578342962) . ' ' . -1 . '
');
print_r(findNb(135440716410000) . ' ' . 4824 . '
');
print_r(findNb(40539911473216) . ' ' . 3568 . '
');