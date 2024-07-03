<?php
/*
|--------------------------------------------------------------------------
| Backwards Read Primes
|--------------------------------------------------------------------------
|
*/

function isPrime($num) {
   if ($num < 2) return false;
   for ($i = 2, $sqrt = sqrt($num); $i <= $sqrt; $i++) {
      if ($num % $i === 0) return false;
   }
   return true;
}
function reverseNumber($num) {
   return intval(strrev(strval($num)));
}
function backwardsPrime($start, $stop) {
   $result = array();
   for ($num = $start; $num <= $stop; $num++) {
      if (isPrime($num) && isPrime(reverseNumber($num)) && $num !== reverseNumber($num)) $result[] = $num;
   }
   return $result;
}


function backwardsPrime($start, $stop) {
   $isPrime = function ($n) {
      if ($n <= 2) return $n === 2;
      if (!($n % 2)) return false;
      foreach (range(3, sqrt($n), 2) as $i)
         if (!($n % $i)) return false;
      return true;
   };
   return array_values(array_filter(range($start, $stop), function ($n) use ($isPrime) {
      return $isPrime($n) && $n !== ($m = intval(strrev(strval($n)))) && $isPrime($m);
   }));
}


function isPrime(int $n): bool {
   if($n < 2) return false;
   for ($i = 2; $i <= sqrt($n); $i++){
     if ($n % $i == 0) return false;
   }
   return true;
}
function backwardsPrime($start, $stop){
   $primes = [];
   for ($i = $start; $i <= $stop; $i++){
      if (isPrime($i) && isPrime(strrev($i)) && ($i != strrev($i))) $primes[] = $i;
   }
   return $primes;
}


print_r(backwardsPrime(9900, 10000));