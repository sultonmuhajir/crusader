<?php
/*
|--------------------------------------------------------------------------
| Is a number prime?
|--------------------------------------------------------------------------
|
*/

function is_prime(int $n): bool {
   for ($i = 2; $i <= $n ** .5; $i++) {
      if (!($n % $i)) {
         return false;
      }
   }
   return $n > 1;
}


function is_prime(int $n): bool {
   for($i=$n**.5|1;$i&&$n%$i--;);return !$i&&$n>1;
}


function is_prime(int $n): bool {
   if($n<2)return false;  $sq= sqrt($n);
   for($i=2; $i<=$sq; ++$i){if( ($n%$i)==0 )return false;}
   return true;
}


function is_prime($n) {
   $start = 2;
   while($start <= sqrt($n)){
      if($n % $start++ < 1){
         return false;
      }
   }
   return $n > 1;
}


print_r(is_prime(1) . ' ' . false . '
');
print_r(is_prime(2) . ' ' . true . '
');