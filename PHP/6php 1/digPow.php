<?php
/*
|--------------------------------------------------------------------------
| Playing with digits
|--------------------------------------------------------------------------
|
*/

function digPow($n, $p) {
   $res = 0;
   for ($i = 0; $i < strlen(strval($n)); $i++) {
      $res += intval(strval($n)[$i]) ** ($p + $i);
   }
   return $res % $n === 0 ? intval($res / $n) : -1;
}


function digPow($n, $p) {
   $res = array_reduce(str_split($n), function($acc, $curr) use (&$p) {
      return $acc + $curr ** $p++;
   }, 0) / $n;
   return is_int($res) ? $res : -1;
}


function digPow($n, $p) {
   $sum = 0;
   foreach (str_split($n) as $i => $e) {
      $sum += $e ** ($i + $p);
   }
   return $sum % $n ? -1 : $sum / $n;
}


print_r(digPow(89, 1) . ' ' . 1 . '
');
print_r(digPow(92, 1) . ' ' . -1 . '
');
print_r(digPow(46288, 3) . ' ' . 51 . '
');