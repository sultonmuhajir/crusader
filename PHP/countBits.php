<?php
/*
|--------------------------------------------------------------------------
| Bit Counting
|--------------------------------------------------------------------------
|
*/

function countBits($n) {
   return count(array_filter(str_split(decbin($n)), function($i) {
      return $i == '1';
   }));
}


function countBits($n) {
  return substr_count(decbin($n), 1);
}


function countBits($n) {
   $n = (string)decbin($n);
   return array_sum(str_split($n));
}


function countBits($n){
   return preg_match_all('/[1]/s', decbin($n), $n);
}


function countBits(int $n): int {
   return strlen(str_replace('0', '', decbin($n)));
}


print_r(countBits(0) . ' ' . 0 . '
');
print_r(countBits(4) . ' ' . 1 . '
');
print_r(countBits(9) . ' ' . 2 . '
');
print_r(countBits(10) . ' ' . 2 . '
');
print_r(countBits(1234) . ' ' . 5 . '
');