<?php
/*
|--------------------------------------------------------------------------
| Kebabize
|--------------------------------------------------------------------------
|
*/

function kebabize($string) {
   $res = '';
   for ($i=0; $i < strlen($string); $i++) { 
      $x = strtolower($string[$i]);
      $res .= $string[$i] != strtoupper($string[$i]) ? $string[$i] : (preg_match('/^[0-9]$/', $string[$i]) ? '' : "-{$x}");
   }
   return implode('-', array_filter(explode('-', $res), function($i) {return $i != '';}));
}


function kebabize($string) {
   return strtolower(preg_replace(['/[^a-zA-Z]/', '/\B[A-Z]/'], ['', '-$0'], $string));
}


function kebabize($string) {
   return implode("-",array_map("strtolower",explode(":", preg_replace('~[A-Z]~u', ':$0', lcfirst(preg_replace("/[0-9]{1}/", "", $string))))));
}


function kebabize($string) {
   return trim(join(array_map(function($e){return ord($e) < 95 ? '-'.strtolower($e) : $e;},str_split(preg_replace('/\d/', '', $string)))), '-');
}


print_r(kebabize('myCamelCasedString') . ' my-camel-cased-string
');
print_r(kebabize('myCamelHas3Humps') . ' my-camel-has-humps
');
print_r(kebabize('Cora') . ' cora
');