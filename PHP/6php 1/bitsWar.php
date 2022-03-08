<?php
/*
|--------------------------------------------------------------------------
| World Bits War
|--------------------------------------------------------------------------
|
*/

function bitsWar($numbers){
   $num = array_filter($numbers, function($i) {return $i != 0;});
   $pOdd = count(array_filter(str_split(implode('', array_map(function($i) {return decbin($i);}, array_filter($num, function($i) {return $i%2!=0 && $i>0;})))), function($i) {return $i=='1';}));
   $mOdd = count(array_filter(str_split(implode('', array_map(function($i) {return decbin($i);}, array_map(function($i) {return $i*(-1);}, array_filter($num, function($i) {return $i%2!=0 && $i<0;}))))), function($i) {return $i=='1';}));
   $pEven = count(array_filter(str_split(implode('', array_map(function($i) {return decbin($i);}, array_filter($num, function($i) {return $i%2==0 && $i>0;})))), function($i) {return $i=='1';}));
   $mEven = count(array_filter(str_split(implode('', array_map(function($i) {return decbin($i);}, array_map(function($i) {return $i*(-1);}, array_filter($num, function($i) {return $i%2==0 && $i<0;}))))), function($i) {return $i=='1';}));
   $odd = $pOdd-$mOdd;
   $even = $pEven-$mEven;
   return $odd > $even ? 'odds win' : ($odd < $even ? 'evens win' : 'tie');
}


function bitsWar($arr){
   $ev = [0]; $od = [0];
   foreach($arr as $v){
      $o = strlen(str_replace('0','',decbin(abs($v))));
      $val = preg_match('/^[-]/',$v) == 0 ? $o : "-$o";
      $v % 2 == 0 ? $ev[] = $val : $od[] = $val;
   }
   return (($ev = array_sum($ev)) > ($od = array_sum($od))) ? 'evens win' : (($od > $ev) ? 'odds win' : 'tie');
}


function bitsWar(array $numbers): string {
   $qty = [0, 0];
   foreach ($numbers as $number)
      $qty[$number & 1] += substr_count(decbin(abs($number)), '1') * ($number < 0 ? -1 : 1);
   return [1 => 'odds win', 0 => 'tie', -1 => 'evens win'][$qty[1] <=> $qty[0]];
}


function bitsWar(array $numbers): string
{
   $odds = $evens = 0;
   foreach ($numbers as $num) {
      $count = substr_count(decbin(abs($num)), '1');
      $value = ($num > 0) ? $count : -$count;
      ($num % 2) ? $odds += $value : $evens += $value;
   }
   switch ($odds <=> $evens) {
      case -1: return "evens win";
      case 0: return "tie";
      case 1: return "odds win";
   }
}


print_r(bitsWar([1, 5, 12]) . " odds win
");
print_r(bitsWar([7, -3, 20]) . " evens win
");
print_r(bitsWar([7, -3, -2, 6]) . " tie
");
print_r(bitsWar([-3, -5]) . " evens win
");
print_r(bitsWar([]) . " tie
");