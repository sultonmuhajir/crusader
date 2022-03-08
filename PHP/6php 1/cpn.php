<?php
/*
|--------------------------------------------------------------------------
| Create Phone Number
|--------------------------------------------------------------------------
|
*/

function createPhoneNumber($n) {
   return "({$n[0]}{$n[1]}{$n[2]}) {$n[3]}{$n[4]}{$n[5]}-{$n[6]}{$n[7]}{$n[8]}{$n[9]}";
}


function createPhoneNumber(array $digits): string {
   return sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$digits);
}


function createPhoneNumber($numbersArray) {
   preg_match('/(\d{3})(\d{3})(\d{4})/', implode('', $numbersArray), $matches);
   return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
}


function createPhoneNumber(array $numbersArray): string {
   return preg_replace('/^([\d]{3})([\d]{3})([\d]{4})$/', '($1) $2-$3', implode('', $numbersArray));
}


print_r(createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]). " (123) 456-7890
");
print_r(createPhoneNumber([1, 1, 1, 1, 1, 1, 1, 1, 1, 1]). " (111) 111-1111
");