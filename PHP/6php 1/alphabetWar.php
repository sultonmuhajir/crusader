<?php
/*
|--------------------------------------------------------------------------
| Alphabet war - airstrike - letters massacre
|--------------------------------------------------------------------------
|
*/

function alphabetWar($fight) {
   $leftPower = ['w' => 4, 'p' => 3, 'b' => 2, 's' => 1];
   $rightPower = ['m' => 4, 'q' => 3, 'd' => 2, 'z' => 1];
   $fightArr = str_split($fight);
   $cleanFight = array_map(function($char, $i) use ($fightArr) {
      return $char === '*' || ($i > 0 && $fightArr[$i - 1] === '*') || ($i < count($fightArr) - 1 && $fightArr[$i + 1] === '*') 
         ? '_' 
         : $char;
   }, $fightArr, array_keys($fightArr));
   $leftScore = array_reduce($cleanFight, function($acc, $char) use ($leftPower) {
      return $acc + ($leftPower[$char] ?? 0);
   }, 0);
   $rightScore = array_reduce($cleanFight, function($acc, $char) use ($rightPower) {
      return $acc + ($rightPower[$char] ?? 0);
   }, 0);
   if ($leftScore > $rightScore) {
      return "Left side wins!";
   } elseif ($rightScore > $leftScore) {
      return "Right side wins!";
   } else {
      return "Let's fight again!";
   }
}


function alphabetWar(string $fight): string {
   $power = ["w"=>-4, "p"=>-3, "b"=>-2, "s"=>-1, "m"=>4, "q"=>3, "d"=>2, "z"=>1];
   $r = 0;
   foreach(str_split(preg_replace('/[a-z]?\*[a-z]?/', '', $fight)) as $char) $r += ($power[$char] ?? 0);
   return ($r === 0) ? "Let's fight again!" : (($r < 0) ? 'Left' : 'Right') . ' side wins!';
}


function alphabetWar($fight) {
   $Lside = ['w'=>4,'p'=>3,'b'=>2,'s'=>1];
   $Rside = ['m'=>4,'q'=>3,'d'=>2,'z'=>1];
   $Lpower = $Rpower = 0;
   $fightArr = str_split($fight);
   foreach($fightArr as $key => $action){
      if ($action=='*') $fightArr[$key-1]=$fightArr[$key+1]=0;
   }
   foreach($fightArr as $soldier){
      $Lpower += $Lside[$soldier]??0;
      $Rpower += $Rside[$soldier]??0;
   }
   return ($Lpower>$Rpower?"Left side wins!":($Rpower>$Lpower?"Right side wins!":"Let's fight again!"));
}


print_r(alphabetWar("zdqmwpbs") . " Let's fight again!
");
print_r(alphabetWar("zz*zzs") . " Right side wins!
");
print_r(alphabetWar("sz**z**zs") . " Left side wins!
");