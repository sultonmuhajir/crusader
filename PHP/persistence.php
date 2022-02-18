<?php
/*
|--------------------------------------------------------------------------
| Persistent Bugger.
|--------------------------------------------------------------------------
|
*/

function persistence(int $num): int {
   $count = 0;
   while ($num >= 10) {
      $arr = [];
      $str = strval($num);
      for ($i=0; $i < strlen($str); $i++) { 
         array_push($arr, intval($str[$i]));
      }
      $num = array_product($arr);
      $count++;
   }
   return $count;
}


function persistence(int $num): int {
   return $num > 9 ? persistence(array_product(str_split($num))) + 1 : 0;
}


function persistence(int $num): int {
   $count = 0;
   while ($num > 9) {
      $num = array_product(str_split($num));
      $count++;
   }
   return $count;
}


function persistence(int $num): int {
   for($i = 0; strlen($num) > 1; $i++)
      $num = array_product(str_split($num));
   return $i;
}


print_r(persistence(39). ' ' . 3 . '
');
print_r(persistence(4). ' ' . 0 . '
');
print_r(persistence(25). ' ' . 2 . '
');
print_r(persistence(999). ' ' . 4 . '
');