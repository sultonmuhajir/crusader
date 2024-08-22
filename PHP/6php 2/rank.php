<?php
/*
|--------------------------------------------------------------------------
| Prize Draw
|--------------------------------------------------------------------------
|
*/

function rank($st, $we, $n) {
   if (empty($st)) return "No participants";
   $names = explode(",", $st);
   if ($n > count($names)) return "Not enough participants";
   $participants = array();
   foreach ($names as $i => $name) {
      $som = strlen($name) + array_sum(array_map(function($char) {
         return ord($char) - 64;
      }, str_split(strtoupper($name))));
      $participants[] = array('name' => $name, 'winningNumber' => $som * $we[$i]);
   }
   usort($participants, function($a, $b) {
      if ($b['winningNumber'] == $a['winningNumber']) {
         return strcmp($a['name'], $b['name']);
      }
      return $b['winningNumber'] - $a['winningNumber'];
   });
   return $participants[$n - 1]['name'];
}


function rank($st, $we, $n) {
   $arr = explode(',', $st);
   if (strlen($st) === 0) return 'No participants';
   if (count($arr) < $n) return 'Not enough participants';
   foreach ($arr as $j => $person) {
      $score = strlen($person);
      for ($i = 0; $i < strlen($person); $i++) {
         $score += (ord(strtolower($person[$i])) - 96);
      }
      $scores[$person] = $score * $we[$j];
   }
   ksort($scores);
   arsort($scores);
   $keys = array_keys($scores);
   return $keys[$n - 1];
}


function rank($st, $we, $n) {
   if ($st === '') return 'No participants';
   $names = explode(',', $st);
   if ($n > count($names)) return 'Not enough participants';
   $win = array();
   foreach ($names as $pos => $name) {
      $sum = strlen($name);
      foreach (str_split($name) as $c) $sum += (ord(strtoupper($c)) - ord('A') + 1);
      $sum *= $we[$pos];
      $win[$name] = $sum;
   }
   ksort($win);
   arsort($win);
   $winner = array_slice($win, $n - 1, 1, true);
   return key($winner);
}


print_r(rank("Addison,Jayden,Sofia,Michael,Andrew,Lily,Benjamin", [4, 2, 1, 4, 3, 1, 2], 4) . " Benjamin
")
print_r(rank("Elijah,Chloe,Elizabeth,Matthew,Natalie,Jayden", [1, 3, 5, 5, 3, 6], 2) . " Matthew
")
print_r(rank("Aubrey,Olivai,Abigail,Chloe,Andrew,Elizabeth", [3, 1, 4, 4, 3, 2], 4) . " Abigail
")
print_r(rank("Lagon,Lily", [1, 5], 2) . " Lagon
")