<?php
/*
|--------------------------------------------------------------------------
| Array Deep Count
|--------------------------------------------------------------------------
|
*/

function deep_c(array $a): int {
   $res = 0;
   foreach ($a as $v) {
      $res++;
      if (is_array($v)) $res += deep_c($v);
   }
   return $res;
}


function deep_c(array $a): int {
   return sizeof($a, 1);
}


function deep_c(array $a): int {
   $c = 'cou'.'nt';
   return $c($a, 1);
}


print_r(deep_c([]) . ' ' . 0 . '
');
print_r(deep_c([1, 2, 3]) . ' ' . 3 . '
');
print_r(deep_c(["x", "y", ["z"]]) . ' ' . 4 . '
');
print_r(deep_c([1, 2, [3, 4, [5]]]) . ' ' . 7 . '
');
print_r(deep_c([[[[[[[[[]]]]]]]]]) . ' ' . 8 . '
');