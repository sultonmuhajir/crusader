<?php
/*
|--------------------------------------------------------------------------
| Playing with passphrases
|--------------------------------------------------------------------------
|
*/

function playPass($s, $n) {
   $res = '';
   for ($i = 0; $i < strlen($s); $i++) {
      $char = $s[$i];
      if (ctype_alpha($char)) {
         $shifted = chr((ord($char) + $n - 65) % 26 + 65);
         $char = $shifted;
      } elseif (ctype_digit($char)) {
         $char = 9 - intval($char);
      }
      $res .= $i % 2 == 0 ? strtoupper($char) : strtolower($char);
   }
   return strrev($res);
}


function playPass($s, $n) {
   $chars = str_split(strtoupper($s));
   foreach($chars as $i => $char) {
      if (ctype_alpha($char)) { $chars[$i] = chr((ord($char)-65+$n)%26+(!($i%2)?65:97));} 
      elseif (is_numeric($char)) { $chars[$i] = 9-$char; }
   }
   return implode(array_reverse($chars));
}


function playPass($s, $n) {
   return strrev(join(array_map(function($c, $i) use ($n) {
      if (is_numeric($c)) return 9 - $c; 
      if (in_array($c, range('A', 'Z'))) {
         $c = chr(ord('A') + (ord($c) - ord('A') + $n) % 26);
         return $i % 2 ? strtolower($c) : $c;
      }
      return $c;
   }, $a = str_split($s), array_keys($a))));
}


print_r(playPass("I LOVE YOU!!!", 1) . " !!!vPz fWpM J");