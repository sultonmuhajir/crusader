<?php
/*
|--------------------------------------------------------------------------
| String average
|--------------------------------------------------------------------------
|
*/

function average_string($s) {
   $N = explode(' ', 'zero one two three four five six seven eight nine');
   $words = explode(' ', $s);
   $sum = 0;
   foreach ($words as $word) {
      $index = array_search($word, $N);
      if ($index === false) return 'n/a';
      $sum += $index;
   }
   return isset($N[floor($sum / count($words))]) ? $N[floor($sum / count($words))] : 'n/a';
}


function average_string(string $s): string {
   $str_num = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
   for ($i = 0, $c = count($n = explode(" ", $s)); $i < $c; $i++) {
      if (!in_array($n[$i], $str_num)) return 'n/a';
      $n[$i] = array_search($n[$i], $str_num);
   }
   return $str_num[floor(array_sum($n) / $c)];
}


function average_string(string $s): string {
   $digits = explode(',', 'zero,one,two,three,four,five,six,seven,eight,nine');
   $s = str_replace($digits, array_flip($digits), $s);
   if(!$s || preg_match('/[^\d| ]/', $s)) return 'n/a';
   $nums = explode(' ', $s);
   return $digits[array_sum($nums) / count($nums)];
}


print_r(average_string("zero nine five two") . " four
");
print_r(average_string("four six two three") . " three
");
print_r(average_string("one two three four five") . " three
");
print_r(average_string("five four") . " four
");
print_r(average_string("zero zero zero zero zero") . " zero
");
print_r(average_string("one one eight one") . " two
");
print_r(average_string("") . " n/a
");