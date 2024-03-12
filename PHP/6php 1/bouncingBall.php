<?php
/*
|--------------------------------------------------------------------------
| Bouncing Balls
|--------------------------------------------------------------------------
|
*/

function bouncingBall($h, $bounce, $window) {
   if ($h <= 0 || $bounce <= 0 || $bounce >= 1 || $window >= $h) return -1;
   $res = 1;
   while ($h > $window) {
      $h *= $bounce;
      if ($h > $window) $res += 2;
   }
   return $res;
}


function bouncingBall($h, $bounce, $window) {
   if ($h <= 0 || $window <= 0 || $h <= $window || $bounce >= 1 || $bounce <= 0) return -1;
   return bouncingBall($h * $bounce, $bounce, $window) + 2;
}


function bouncingBall(float $h, float $bounce, float $window): int {
   return ($bounce > 0 && $bounce < 1 && $window < $h) ? ceil(log($window/$h) / log($bounce))*2 - 1 : -1;
}


print_r(bouncingBall(3.0, 0.66, 1.5) . ' ' . 3 . '
');
print_r(bouncingBall(30.0, 0.66, 1.5) . ' ' . 15 . '
');
print_r(bouncingBall(3.0, 1.0, 1.5) . ' ' . -1 . '
');