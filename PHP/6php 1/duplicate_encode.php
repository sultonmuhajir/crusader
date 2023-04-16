<?php
/*
|--------------------------------------------------------------------------
| Duplicate Encoder
|--------------------------------------------------------------------------
|
*/

function duplicate_encode($word) {
   return implode("", array_map(function ($char) use ($word) {
      return (substr_count(strtolower($word), strtolower($char)) > 1) ? ")" : "(";
   }, str_split($word)));
}


function duplicate_encode($word){
   $str = "";
   foreach(str_split($word) as $v) {
      $str .= preg_match_all("/[$v]{1}/i", $word) > 1 ? ')' : '(';
   }
   return $str;
}


function duplicate_encode($word){
	$word = str_split(strtolower($word));
	$str = "";
	foreach($word as $key){
		(count(array_keys($word,$key))>1) ? $str .= ")" : $str .= "(";
	}	
	return $str;			
}


print_r(duplicate_encode("din") . " (((
");
print_r(duplicate_encode("recede") . " ()()()
");
print_r(duplicate_encode("Success") . " )())())", "should ignore case
");
print_r(duplicate_encode("(( @") . " ))((
");