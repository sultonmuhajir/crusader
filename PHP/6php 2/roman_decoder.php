<?php
/*
|--------------------------------------------------------------------------
| Roman Numerals Decoder
|--------------------------------------------------------------------------
|
*/

function solution($roman) {
   $x = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
   $res = 0;
   for ($i = 0; $i < strlen($roman); $i++) {
      $current = $x[$roman[$i]];
      $next = isset($roman[$i + 1]) ? $x[$roman[$i + 1]] : 0;
      if ($next && $current < $next) {
         $res += $next - $current;
         $i++;
      } else {
         $res += $current;
      }
   }
   return $res;
}


function solution ($roman) {
   $patterns = ['/IV/','/IX/','/XL/','/XC/','/CD/','/CM/','/I/','/V/','/X/','/L/','/C/','/D/','/M/'];
   $replacements = ['4/','9/','40/','90/','400/','900/','1/','5/','10/','50/','100/','500/','1000/'];
   $str_num = preg_replace($patterns,$replacements,$roman);
   $arr_num = explode('/',$str_num,-1);
   return array_sum($arr_num);
}


function solution ($roman) {
   $number = 0;
   $tmp = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
   $nums = str_split($roman);
   foreach ($nums as $key => $char) {
      $number = $tmp[$char] >= $tmp[$nums[$key + 1]] ? $number + $tmp[$char] : $number - $tmp[$char];
   }
   return $number;
}


print_r(solution("XXI") . ' ' . 21 . '
');
print_r(solution("I") . ' ' . 1 . '
');
print_r(solution("IV") . ' ' . 4 . '
');
print_r(solution("MMVIII") . ' ' . 2008 . '
');
print_r(solution("MDCLXVI") . ' ' . 1666 . '
');