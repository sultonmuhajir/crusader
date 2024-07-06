<?php
/*
|--------------------------------------------------------------------------
| Primorial Of a Number
|--------------------------------------------------------------------------
|
*/

function isPrime($num) {
   if ($num <= 1) return false;
   for ($i = 2; $i <= sqrt($num); $i++) {
      if ($num % $i == 0) return false;
   }
   return true;
}
function numPrimorial($n) {
   $res = [];
   $num = 2;
   while (count($res) < $n) {
      if (isPrime($num)) array_push($res, $num);
      $num++;
   }
   return array_product($res);
}


function numPrimorial($n){
   $p = 0;
   while($n != 0){
      $p++;
      if(!preg_match('/^1?$|^(11+?)\1+$/x', str_repeat('1', $p))){
         $res[] = $p;
         $n--;
      }
   }
   return array_product($res);
}


function numPrimorial($n) {
   $p_num = $res = 1;
   for ($c = 0; $c <= $n; $p_num++) {
      $fg = 0;
      for ($i = 1; $i <= $p_num; $i++) {
         if (($p_num % $i) == 0) $fg++;
      }
      if ($fg < 3) {
         $res *= $p_num;
         $c++;
      }
   }
   return $res;
}


print_r(numPrimorial(3) . ' ' . 30 . '
');
print_r(numPrimorial(4) . ' ' . 210 . '
');
print_r(numPrimorial(5) . ' ' . 2310 . '
');
print_r(numPrimorial(8) . ' ' . 9699690 . '
');
print_r(numPrimorial(9) . ' ' . 223092870 . '
');