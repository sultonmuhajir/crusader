<?php
/*
|--------------------------------------------------------------------------
| Statistics for an Athletic Association
|--------------------------------------------------------------------------
|
*/

function toHMS($sec) {
   $h = str_pad(floor($sec / 3600), 2, "0", STR_PAD_LEFT);
   $sec %= 3600;
   $m = str_pad(floor($sec / 60), 2, "0", STR_PAD_LEFT);
   $s = str_pad($sec % 60, 2, "0", STR_PAD_LEFT);
   return "$h|$m|$s";
}
function statAssoc($strg) {
   if ($strg === "") return "";
   $times = array_map(function($t) {
      list($h, $m, $s) = array_map('intval', explode("|", $t));
      return $h * 3600 + $m * 60 + $s;
   }, explode(", ", $strg));
   sort($times);
   $range = $times[count($times) - 1] - $times[0];
   $avg = floor(array_sum($times) / count($times));
   if (count($times) % 2 === 0) {
      $med = floor(($times[count($times) / 2 - 1] + $times[count($times) / 2]) / 2);
   } else {
      $med = $times[floor(count($times) / 2)];
   }
   return "Range: " . toHMS($range) . " Average: " . toHMS($avg) . " Median: " . toHMS($med);
}


function statAssoc($strg) {
   if (!$strg) return "";
   $records = explode(', ', $strg);
   $records = array_map(function($r) {
      list($h, $m, $s) = explode('|', $r);
      return $h * 3600 + $m * 60 + $s;
   }, $records);
   sort($records);
   $range = max($records) - min($records);
   $avg = array_sum($records) / ($n = count($records));
   $median = $n % 2 ? $records[intval($n / 2)] : ($records[$n / 2 - 1] + $records[$n / 2]) / 2;
   return sprintf("Range: %s Average: %s Median: %s", date('H|i|s', $range), date('H|i|s', $avg), date('H|i|s', $median));
}


print_r(statAssoc("01|15|59, 1|47|16, 01|17|20, 1|32|34, 2|17|17") . " Range: 01|01|18 Average: 01|38|05 Median: 01|32|34");