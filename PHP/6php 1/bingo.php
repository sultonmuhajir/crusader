<?php
/*
|--------------------------------------------------------------------------
| Lottery Ticket
|--------------------------------------------------------------------------
|
*/

function bingo($ticket, $win) {
   $res = array_reduce($ticket, function($count, $item) {
      [$string, $num] = $item;
      return $count + (preg_match('/' . chr($num) . '/', $string) ? 1 : 0);
   }, 0);
   return $res >= $win ? "Winner!" : "Loser!";
}


function bingo(array $ticket, int $win): string {
   return count(array_filter( $ticket, function ($arr) { 
      return substr_count($arr[0], chr($arr[1])); 
   }))>=$win ? 'Winner!' : 'Loser!';
}


function bingo(array $ticket, int $win): string {
   $result = 0;
   foreach($ticket as $one) {
      $result += strpos($one[0], chr($one[1])) !== false ? 1 : 0;
   }
   return $result >= $win ? "Winner!" : "Loser!";
}


print_r(bingo([['ABC', 65], ['HGR', 74], ['BYHT', 74]], 2) . ' Loser!
');
print_r(bingo([['ABC', 65], ['HGR', 74], ['BYHT', 74]], 1) . ' Winner!
');
print_r(bingo([['HGTYRE', 74], ['BE', 66], ['JKTY', 74]], 3) . ' Loser!
');