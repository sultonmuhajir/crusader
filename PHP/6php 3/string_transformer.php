<?php
/*
|--------------------------------------------------------------------------
| String transformer
|--------------------------------------------------------------------------
|
*/

function string_transformer(string $s) {
   $x = implode("", array_map(function($char) {
      return ctype_lower($char) ? strtoupper($char) : strtolower($char);
   }, str_split($s)));
   return implode("", array_reverse(preg_split('/(\s+)/', $x, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE)));
}


function string_transformer(string $s): string {
   return implode(" ", array_reverse(explode(" ", strtolower($s) ^ strtoupper($s) ^ $s)));
}


function string_transformer(string $s): string {
   $answer = str_split($s);
   foreach ($answer as $key=>$val){
      $answer[$key]=ctype_upper($val)?strtolower($val):strtoupper($val);
   }
   return implode(' ', array_reverse(explode(' ', implode($answer))));
}


print_r(string_transformer("Example string") . " STRING eXAMPLE");