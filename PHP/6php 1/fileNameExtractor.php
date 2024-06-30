<?php
/*
|--------------------------------------------------------------------------
| extract portion of file name
|--------------------------------------------------------------------------
|
*/

function fileNameExtractor($dirtyFileName) {
   $start = strpos($dirtyFileName, '_') + 1;
   $length = strrpos($dirtyFileName, '.') - $start;
   return substr($dirtyFileName, $start, $length);
}


function fileNameExtractor(string $dirtyFileName): string {
   return preg_replace('/(?:\d+_)(\S+\.\S+)(?:\.\S+)/', '$1', $dirtyFileName);
}


function fileNameExtractor(string $dirtyFileName): string {
   preg_match("/\d*_(.*)\./",$dirtyFileName,$result);
   return $result[1];
}