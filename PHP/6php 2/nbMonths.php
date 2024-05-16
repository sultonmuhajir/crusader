<?php
/*
|--------------------------------------------------------------------------
| Buying a car
|--------------------------------------------------------------------------
|
*/

function nbMonths($spo, $spn, $spm, $plm) {
   $months = 0; $savings = 0;
   while ($spo + $savings < $spn) {
      $months++;
      if ($months % 2 == 0) $plm += 0.5;
      $spo *= 1 - $plm / 100;
      $spn *= 1 - $plm / 100;
      $savings += $spm;
   }
   return array($months, round($spo + $savings - $spn));
}


function nbMonths($p0, $p1, $s, $r, $m = 0, $t = 0) {
   if ($p1 <= $p0 + $t) return [$m, round($p0 - $p1 + $t)];
   $p0 -= $p0 * 0.01 * $r;
   $p1 -= $p1 * 0.01 * $r;
   $t += $s;
   $m++;
   if ($m % 2 == 1) $r += .5;
   return nbMonths($p0, $p1, $s, $r, $m, $t);
}


function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth) {
   $savings = 0;
   for($i=0;$startPriceOld+$savings < $startPriceNew;$i++){
      $savings += $savingPerMonth;
      $startPriceOld *= (100-$percentLossByMonth)/100;
      $startPriceNew *= (100-$percentLossByMonth)/100;
      if($i % 2 == 0) $percentLossByMonth += 0.5;
   }
   return [$i, round($startPriceOld+$savings - $startPriceNew)];
}


print_r(nbMonths(2000, 8000, 1000, 1.5));
print_r(nbMonths(12000, 8000, 1000, 1.5));