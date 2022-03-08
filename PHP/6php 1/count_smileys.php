<?php
/*
|--------------------------------------------------------------------------
| Count the smiley faces!
|--------------------------------------------------------------------------
|
*/

function count_smileys($arr): int {
   $smileys = [":)", ";)", ":-)", ";-)", ";~)", ":~)", ":D", ";D", ":-D", ":~D", ";-D", ";~D"];
   $count = 0;
   for ($i=0; $i < count($arr); $i++) { 
      for ($j=0; $j < count($smileys); $j++) { 
         if ($arr[$i] == $smileys[$j]) {
            $count++;
         }
      }
   }
   return $count;
}


function count_smileys($arr): int {
   return preg_match_all("/[:;][-~]?[\)D]/", implode(",", $arr));
}


function count_smileys($arr): int {
   return count(preg_grep('/[:;][-~]?[D)]/',$arr));
}


function count_smileys($arr): int {
   $smiles = array_filter($arr, function ($smile) {
      $re = '#[:;][-~]?[D\)]#';
      return preg_match($re, $smile);
   });
   return count($smiles);
}


function count_smileys($arr): int {
   $matches  = preg_grep ('/^(:|;)(-|~)?(D|\))$/i', $arr);
   return count($matches);
}


print_r(count_smileys([]) . ' ' . 0 . '
');
print_r(count_smileys([':D',':~)',';~D',':)']) . ' ' . 4 . '
');
print_r(count_smileys([':)',':(',':D',':O',':;']) . ' ' . 2 . '
');
print_r(count_smileys([';]', ':[', ';*', ':$', ';-D']) . ' ' . 1 . '
');