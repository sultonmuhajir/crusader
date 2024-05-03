<?php
/*
|--------------------------------------------------------------------------
| A Rule of Divisibility by 13
|--------------------------------------------------------------------------
|
*/

function thirt($n) {
   $arr = [1, 10, 9, 12, 3, 4];
   $res = $n; $prev = 0;
   while ($res !== $prev) {
      $prev = $res;
      $res = array_sum(array_map(function($x, $i) use ($arr) {
         return intval($x) * $arr[$i % count($arr)];
      }, str_split(strrev(strval($res))), range(0, strlen(strval($res)) - 1)));
   }
   return $res;
}


function thirt($n) {
   $sequence = [1,10,9,12,3,4];
   $sum = 0;
   $index = 0;
   foreach (array_reverse(str_split($n)) as $char) {      
      $sum+=(int)$char * $sequence[$index % 6];
      $index++;
   }
   return ($n===$sum) ? $n : thirt($sum);
}


function thirt($n) {
   $sum = 0;
   $s = strval($n);
   for($i = 0; $i < strlen($s); $i++){
      $sum += $s[strlen($s)-($i+1)] * ((10 ** $i) % 13);
   }
   if($n == $sum) return $sum;
   return thirt($sum);
}


print_r(thirt(8529) . ' ' . 79 . '
');
print_r(thirt(85299258) . ' ' . 31 . '
');
print_r(thirt(5634) . ' ' . 57 . '
');
print_r(thirt(1111111111) . ' ' . 71 . '
');
print_r(thirt(987654321) . ' ' . 30 . '
');