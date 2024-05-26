<?php
/*
|--------------------------------------------------------------------------
| Decipher this!
|--------------------------------------------------------------------------
|
*/

function decipherThis($str) {
   $deciphered_words = array_map(function($word) {
      preg_match('/^\d+/', $word, $matches);
      $charCode = $matches[0];
      $firstChar = chr($charCode);
      $remaining = substr($word, strlen($charCode));
      if (strlen($remaining) < 2) return $firstChar . $remaining;
      $swapped = $remaining[strlen($remaining) - 1] . substr($remaining, 1, -1) . $remaining[0];
      return $firstChar . $swapped;
   }, explode(" ", $str));
   return implode(" ", $deciphered_words);
}


function decipherThis($str) {
   return preg_replace_callback('/(\d+)(\w?)(\w*?)(\w?)\b/',function($m){
      return chr($m[1]).$m[4].$m[3].$m[2];
   }, $str);
}


function decipherThis($str) {
	$pattern = '/\b(\d+)(\w?)(\w*?)(\w?)\b/';
	return preg_replace_callback($pattern, function ($matches) {
		return chr($matches[1]) . $matches[4] . $matches[3] . $matches[2];
	}, $str);
}


print_r(decipherThis("65 119esi 111dl 111lw 108dvei 105n 97n 111ka") . " A wise old owl lived in an oak
");
print_r(decipherThis("84eh 109ero 104e 115wa 116eh 108sse 104e 115eokp") . " The more he saw the less he spoke
");