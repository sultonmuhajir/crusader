<?php
/*
|--------------------------------------------------------------------------
| Dashatize it
|--------------------------------------------------------------------------
|
*/

function dashatize(int $num) {
   $n = strval(abs($num));
   $res = '';
   for ($i = 0; $i < strlen($n); $i++) {
      $x = $n[$i];
      $res .= intval($x) % 2 == 0 ? $x : "-{$x}-";
   }
   return implode('-', array_filter(explode('-', $res), function($i) {return $i != '';}));
}


function dashatize(int $num): string {
   return trim(str_replace('--', '-', preg_replace('/([13579])/','-$1-', $num)), '-');
}


function dashatize(int $num): string {
   return trim(preg_replace(["/[13579]/", "/--/"], ["-\$0-", "-"], $num), "-");
}


function dashatize(int $num): string {
   return trim(str_replace(['1', '3', '5', '7', '9', '--'], ['-1-', '-3-', '-5-', '-7-', '-9-', '-'], strval($num)), '-');
}


print_r(dashatize(274) . " 2-7-4
");
print_r(dashatize(5311) . " 5-3-1-1
");
print_r(dashatize(86320) . " 86-3-20
");
print_r(dashatize(974302) . " 9-7-4-3-02
");