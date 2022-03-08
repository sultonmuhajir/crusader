<?php
/*
|--------------------------------------------------------------------------
| Grouped by commas
|--------------------------------------------------------------------------
|
*/

function groupByCommas($n) {
   $res = [];
   $x = array_reverse(str_split($n));
   for ($i=0; $i < count($x); $i++) { 
      if ($i % 3 == 0 && $i != 0) {
         array_push($res, ',');
      }
      array_push($res, $x[$i]);
   }
   return implode('', array_reverse($res));
}


function groupByCommas($n) {
   return number_format($n);
}


function groupByCommas($n) {
   $str = strrev("$n");
   $arr = str_split($str, 3);
   return strrev(implode(',',$arr));
}


function groupByCommas($n) {
   return strrev( preg_replace("/...(?=.)/", "$0,", strrev((string)$n) ) );
}


print_r(groupByCommas(10000) . ' 10,000
');
print_r(groupByCommas(100000) . ' 100,000
');
print_r(groupByCommas(35235235) . ' 35,235,235
');