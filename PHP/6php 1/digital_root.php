<?php
/*
|--------------------------------------------------------------------------
| Sum of Digits / Digital Root
|--------------------------------------------------------------------------
|
*/

function digital_root($number) {
   while ($number >= 10) {
      $arr = [];
      $str = (string) $number;
      for ($i = 0; $i < strlen($str); $i++) {
         $arr[] = (int) $str[$i];
      }
      $number = array_sum($arr);
   }
   return $number;
}


function digital_root($n): int {
   return 1 + ($n - 1) % 9;
}


function digital_root($number): int {
   while(strlen($number) > 1) {
      $number = array_sum(str_split($number));
   }
   return $number;
}


print_r(digital_root(16) . ' ' . 7 . '
');
print_r(digital_root(456) . ' ' . 6 . '
');
print_r(digital_root(5104) . ' ' . 1 . '
');