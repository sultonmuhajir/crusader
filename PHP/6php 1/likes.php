<?php
/*
|--------------------------------------------------------------------------
| Who likes it?
|--------------------------------------------------------------------------
|
*/

function likes( $names ) {
   if (count($names) == 0) {
      return 'no one likes this';
   } else if (count($names) == 1) {
      return "{$names[0]} likes this";
   } else if (count($names) == 2) {
      return "{$names[0]} and {$names[1]} like this";
   } else if (count($names) == 3) {
      return "{$names[0]}, {$names[1]} and {$names[2]} like this";
   } else {
      $otr = count($names) - 2;
      return "{$names[0]}, {$names[1]} and {$otr} others like this";
   }
}


function likes($names): string {
   return array(
      '0' => "no one likes this",
      '1' => "{$names[0]} likes this",
      '2' => "{$names[0]} and {$names[1]} like this",
      '3' => "{$names[0]}, {$names[1]} and {$names[2]} like this",
      '4' => "{$names[0]}, {$names[1]} and ". (sizeof($names) - 2) ." others like this")[min(4, sizeof($names))];
}


function likes( $names ) {
   switch (count($names)) {
      case 0: return 'no one likes this';
      case 1: return sprintf('%s likes this', $names[0]);
      case 2: return sprintf('%s and %s like this', $names[0], $names[1]);
      case 3: return sprintf('%s, %s and %s like this', $names[0], $names[1], $names[2]);
      default: return sprintf('%s, %s and %d others like this', $names[0], $names[1], count($names) - 2);
   }
}


function likes($names): string
{
   $formals[0] = 'no one likes this';
   $formals[1] = '%s likes this';
   $formals[2] = '%s and %s like this';
   $formals[3] = '%s, %s and %s like this';
   $namesCount = count($names);
   if ($namesCount < 4) {
      return sprintf($formals[$namesCount], ...$names);
   }
   return sprintf('%s, %s and %s others like this', $names[0], $names[1], $namesCount - 2);
}


print_r(likes([]). ' no one likes this
');
print_r(likes(['Peter']). ' Peter likes this
');
print_r(likes(['Jacob', 'Alex']). ' Jacob and Alex like this
');
print_r(likes(['Max', 'John', 'Mark']). ' Max, John and Mark like this
');
print_r(likes(['Alex', 'Jacob', 'Mark', 'Max']). ' Alex, Jacob and 2 others like this
');
print_r(likes(["Rika", "Lily", "Feby", "Rindi", "Dena", "Novan", "Iqbal"]));