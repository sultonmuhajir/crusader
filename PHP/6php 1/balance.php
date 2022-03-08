<?php
/*
|--------------------------------------------------------------------------
| Exclamation marks series #17: Put the exclamation marks and question marks on the balance - are they balanced?
|--------------------------------------------------------------------------
|
*/

function balance(string $l, string $r): string {
   $res = 0;
   for ($i = 0; $i < strlen($l); $i++) {
      $res += $l[$i] == '!' ? 2 : 3;
   }
   for ($j = 0; $j < strlen($r); $j++) {
      $res -= $r[$j] == '!' ? 2 : 3;
   }
   return $res < 0 ? "Right" : ($res > 0 ? "Left" : "Balance");
}


function balance(string $l, string $r): string {
   $a = substr_count($l, "!")*2+substr_count($l, "?")*3;
   $b = substr_count($r, "!")*2+substr_count($r, "?")*3;
   if ($a == $b) return "Balance"; elseif ($a < $b) return "Right"; else return "Left";
}


function balance(string $l, string $r): string {
   $l = array_sum(str_split(str_replace(['!', '?'], ['2,','3,'], $l)));
   $r = array_sum(str_split(str_replace(['!', '?'], ['2,','3,'], $r)));
   return $l == $r ? 'Balance' : ($l > $r ? 'Left' : 'Right');
}


function balance(string $l, string $r): string {
   $l = array_count_values(str_split($l));
   $r = array_count_values(str_split($r));
   $l['!'] *= 2; $r['!'] *= 2; $l['?'] *= 3; $r['?'] *= 3;
   if(array_sum($l) == array_sum($r)) return "Balance";
   return array_sum($l) > array_sum($r) ? "Left" : "Right";
}


print_r(balance("!!", "??") . " Right
");
print_r(balance("!??", "?!!") . " Left
");
print_r(balance("!?!!", "?!?") . " Left
");
print_r(balance("!!???!????", "??!!?!!!!!!!") . " Balance
");