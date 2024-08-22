<?php
/*
|--------------------------------------------------------------------------
| Coordinates Validator
|--------------------------------------------------------------------------
|
*/

function isValidCoordinates($coordinates) {
   if (preg_match('/^-?\d{1,2}(\.\d+)?,\s?-?\d{1,3}(\.\d+)?$/', $coordinates)) {
      [$lat, $lon] = array_map('floatval', explode(',', $coordinates));
      return $lat >= -90 && $lat <= 90 && $lon >= -180 && $lon <= 180;
   }
   return false;
}


function isValidCoordinates($coordinates) {
   return preg_match("/^-?(0?\d|[1-8]\d|90)(\.\d+)?,\s-?(0?\d|\d\d|1([0-7]\d|80))(\.\d+)?$/", $coordinates);
}


function isValidCoordinates(string $coordinates) {
   $exp = '/^(?P<lat>-?\d+(?:\.\d+)?)\s*,\s*(?P<lon>-?\d+(?:\.\d+)?)$/';
   return preg_match($exp, $coordinates, $matches)
      && abs($matches['lat']) <= 90
      && abs($matches['lon']) <= 180;
}


print_r(isValidCoordinates("-23, 25") . ' ' . true . '
');
print_r(isValidCoordinates("24.53525235, 23.45235") . ' ' . true . '
');
print_r(isValidCoordinates("23.234, - 23.4234") . ' ' . false . '
');
print_r(isValidCoordinates("2342.43536, 34.324236") . ' ' . false . '
');