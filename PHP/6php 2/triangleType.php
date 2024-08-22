<?php
/*
|--------------------------------------------------------------------------
| Triangle type
|--------------------------------------------------------------------------
|
*/

function triangleType($a, $b, $c) {
   $sides = array($a, $b, $c);
   sort($sides);
   list($a, $b, $c) = $sides;   
   if ($a + $b <= $c) return 0; 
   if ($a * $a + $b * $b == $c * $c) return 2; 
   if ($a * $a + $b * $b < $c * $c) return 3; 
   return 1; 
}


function triangleType($a, $b, $c) : int {
   $h = max($a, $b, $c);
   return $a+$b+$c <= 2*$h ? 0 : (2*$h**2 < $a**2+$b**2+$c**2 ? 1 : (2*$h**2 == $a**2+$b**2+$c**2 ? 2 : 3));
}


function triangleType(float $a, float $b, float $c): int {
   $t = [$a, $b, $c];
   sort($t);
   if($t[0] + $t[1] <= $t[2]) return 0;
   $s = array_map(fn($v) => $v * $v, $t);
   if($s[0] + $s[1] == $s[2]) return 2;
   if($s[0] + $s[1] < $s[2]) return 3;
   if($s[0] + $s[1] > $s[2]) return 1;
}


print_r(triangleType(2, 4, 6) . ' ' . 0 . '
');
print_r(triangleType(8, 5, 7) . ' ' . 1 . '
');
print_r(triangleType(3, 4, 5) . ' ' . 2 . '
');
print_r(triangleType(7, 12, 8) . ' ' . 3 . '
');