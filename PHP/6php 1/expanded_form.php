<?php
/*
|--------------------------------------------------------------------------
| Write Number in Expanded Form
|--------------------------------------------------------------------------
|
*/

function expanded_form($n) {
   $res = [];
   for ($i = 0; $i < strlen(strval($n)); $i++) {
      if (strval($n)[$i] !== "0") {
         array_push($res, strval($n)[$i] . str_repeat("0", strlen(strval($n)) - $i - 1));
      }
   }
   return implode(" + ", $res);
}


function expanded_form(int $n): string {
   $arr = str_split((string) $n);
   $arr = array_map(fn($x,$idx)=>$x.str_repeat('0', count($arr)-$idx-1), $arr, array_keys($arr));
   $arr = array_filter($arr, fn($x)=>(int)$x>0);
   return implode(' + ', $arr);
}


function expanded_form(int $n): string {
   $terms = [];
   while ($n !== 0) {
      $n -= $exp = substr($n, 0, 1) * pow(10, (strlen($n) - 1));
      $terms[] = $exp;
   }
   return implode(' + ', $terms);
}


print_r(expanded_form(12) . " 10 + 2
");
print_r(expanded_form(42) . " 40 + 2
");
print_r(expanded_form(70304) . " 70000 + 300 + 4
");