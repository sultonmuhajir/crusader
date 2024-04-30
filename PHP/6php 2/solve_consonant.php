<?php
/*
|--------------------------------------------------------------------------
| Consonant value
|--------------------------------------------------------------------------
|
*/

function solve($s) {
   $res = 0; $temp = 0;
   for ($i = 0; $i < strlen($s); $i++) {
      $char = $s[$i];
      if (strpos('aeiou', $char) === false) {
         $temp += ord($char) - 96;
         $res = max($res, $temp);
      } else {
         $temp = 0;
      }
   }
   return $res;
}


function solve($s) {
   return max(array_map(function ($e) {
      return array_sum(array_map(function ($f) {
         return ord($f) - 96;
      }, str_split($e)));
   }, preg_split("/[aeiou]+/", $s)));
}


function solve(string $s): int {
   return max(array_map('value', preg_split('/[aeiou]+/', $s)));
}
function value(string $s): int {
   return array_sum(array_map(fn(string $c): int => ord($c) - 0x60, str_split($s)));
}


print_r(solve("zodiac") . ' ' . 26 . '
');
print_r(solve("chruschtschov") . ' ' . 80 . '
');
print_r(solve("khrushchev") . ' ' . 38 . '
');