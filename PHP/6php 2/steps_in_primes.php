<?php
/*
|--------------------------------------------------------------------------
| Steps in Primes
|--------------------------------------------------------------------------
|
*/

function is_prime($n) {
   if ($n <= 1) return false;
   if ($n <= 3) return true;
   if ($n % 2 == 0 || $n % 3 == 0) return false;
   for ($i = 5; $i * $i <= $n; $i += 6) {
      if ($n % $i == 0 || $n % ($i + 2) == 0) return false;
   }
   return true;
}
function step($g, $m, $n) {
   for ($i = $m; $i <= $n - $g; $i++) {
      if (is_prime($i) && is_prime($i + $g)) {
         return [$i, $i + $g];
      }
   }
   return null;
}


function isPrime($n) {
   for ($i=2; $i*$i<=$n; $i++){
      if ($n%$i==0) return false;
   }
   return $n>=2;
}
function step($g, $m, $n) {
   while ($m+$g<=$n){
      if (isPrime($m) && isPrime($m+$g)) {
         return [$m, $m+$g];
      }
      $m++;
   }
   return null;
}


print_r(step(2, 100, 110));
print_r(step(4, 100, 110));
print_r(step(6, 100, 110));
print_r(step(8, 300, 400));
print_r(step(10, 300, 400));