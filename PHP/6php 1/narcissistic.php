<?php
/*
|--------------------------------------------------------------------------
| Does my number look big in this?
|--------------------------------------------------------------------------
|
*/

function narcissistic($value) {
   $str = str_split(strval($value));
   return array_sum(array_map(fn($i) => $i ** count($str), $str)) == $value;
}


function narcissistic(int $value): bool {
   $len = strlen($value);
   $sum = 0;
   foreach (str_split($value) as $num) {
      $sum += pow($num,$len);
   }
   return ($sum == $value);
}


function narcissistic(int $value): bool {
   $total = array_reduce(str_split($value), function ($carry, $item) use ($value) {
      $carry += pow($item, strlen($value));
      return $carry;
   }, 0);
   return $total === $value;
}


function narcissistic(int $value): bool {
   $power = (floor(log10($value) + 1));
   $sum = 0;
   $n = $value;
   while ($n > 0) {
      $digit = $n % 10;
      $sum += pow($digit, $power);
      $n = floor($n/10);
   }
   return $value == $sum ? true: false;
}


print_r(narcissistic(7). ' ' . true . '
');
print_r(narcissistic(371). ' ' . true . '
');