<?php
/*
|--------------------------------------------------------------------------
| WeIrD StRiNg CaSe
|--------------------------------------------------------------------------
|
*/

function toWeirdCase($string) {
   return implode(' ', array_map(function($word) {
      return implode('', array_map(function($i, $char) {
         return $i % 2 === 0 ? strtoupper($char) : strtolower($char);
      }, array_keys(str_split($word)), str_split($word)));
   }, explode(' ', $string)));
}


function toWeirdCase($string) {
   return preg_replace_callback('/(\w)(.)?/', function ($match){ return strtoupper($match[1]).strtolower($match[2]);}, $string);
}


function toWeirdCase($string) {
   $words = explode(' ', $string); $res = "";
   foreach($words as $word) {
      foreach(str_split($word) as $k => $v) $res .= $k % 2 == 0 ? strtoupper($v) : strtolower($v);
      $res .= " ";
   }
   return rtrim($res);
}


print_r(toWeirdCase("This") . " ThIs
");
print_r(toWeirdCase("is") . " Is
");
print_r(toWeirdCase("This is a test") . " ThIs Is A TeSt
");