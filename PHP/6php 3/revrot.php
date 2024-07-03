<?php
/*
|--------------------------------------------------------------------------
| Reverse or rotate?
|--------------------------------------------------------------------------
|
*/

function revrot($str, $sz) {
   if ($sz <= 0 || $str === "" || $sz > strlen($str)) return "";
   $res = "";
   for ($i = 0; $i < strlen($str); $i += $sz) {
      $chunk = substr($str, $i, $sz);
      if (strlen($chunk) === $sz) {
         $chunk_sum = array_sum(str_split($chunk));
         $res .= $chunk_sum % 2 === 0 ? strrev($chunk) : substr($chunk, 1) . $chunk[0];
      }
   }
   return $res;
}


function revrot($s, $sz) {
   if ($sz <= 0 || strlen($s) < $sz) return "";
   return implode(array_map(function($subs) use ($sz){
      return (array_sum(str_split($subs)) % 2) ? substr($subs, 1, $sz - 1) . $subs[0] : strrev($subs);
   }, str_split(substr($s, 0, (int)(strlen($s) / $sz) * $sz), $sz)));
}


function revrot($s, $sz) {
   $res = '';
   while($sz > 0 && strlen($s) >= $sz) {
      $chunk   = substr($s, 0, $sz);
      $rev = array_sum(str_split($chunk)) % 2 === 0;
      $res .= $rev ? strrev($chunk) : substr($chunk . $chunk[0], 1);
      $s = substr($s, $sz);
   }
   return $res;
}


print_r(revrot("1234", 0) . " 
");
print_r(revrot("", 0) . " 
");
print_r(revrot("1234", 5) . " 
");
print_r(revrot("733049910872815764", 5) . " 330479108928157
");