<?php
/*
|--------------------------------------------------------------------------
| Valid Braces
|--------------------------------------------------------------------------
|
*/

function validBraces($braces) {
   $res = []; $pairs = ["(" => ")", "[" => "]", "{" => "}"];
   for ($i = 0; $i < strlen($braces); $i++) {
      if (array_key_exists($braces[$i], $pairs)) {
         array_push($res, $braces[$i]);
      } else {
         if (empty($res) || $pairs[array_pop($res)] != $braces[$i]) return false;
      }
   }
   return empty($res);
}


function validBraces($braces) {
   return (bool) preg_match('#\A(\((?1)\)|\[(?1)]|{(?1)}|)*\Z#', $braces);
}


function validBraces($braces){
   $count = 1;
   while ($count) $braces = str_replace(['()', '[]', '{}'], '', $braces, $count);
   return $braces === '';
}


print_r(validBraces("(){}[]") . ' ' . true . '
');
print_r(validBraces("([{}])") . ' ' . true . '
');
print_r(validBraces("(}") . ' ' . false . '
');
print_r(validBraces("[(])") . ' ' . false . '
');
print_r(validBraces("[({})](]") . ' ' . false . '
');