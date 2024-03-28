<?php
/*
|--------------------------------------------------------------------------
| Decode the Morse code
|--------------------------------------------------------------------------
|
*/

function decode_morse($code) {
   return implode(' ', array_map(
      function ($word) use ($MORSE_CODE) {
         return implode('', array_map(
            function ($code) use ($MORSE_CODE) {
               return $MORSE_CODE[$code];
            },
            explode(' ', $word)
         ));
      },
      explode('   ', trim($code))
   ));
}


function decode_morse(string $code): string {
   return strtr(trim($code), MORSE_CODE + ['  ' => ' ',' ' => '']);
}


function decode_morse($code) {
   return trim(str_replace(['   ',' ','^'], ['^','',' '],strtr($code,MORSE_CODE)));
}


print_r(decode_morse(".... . -.--   .--- ..- -.. .") . " HEY JUDE
");
print_r(decode_morse("   .... . -.--   ") . " HEY
");