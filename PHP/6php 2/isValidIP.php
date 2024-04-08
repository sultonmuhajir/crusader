<?php
/*
|--------------------------------------------------------------------------
| IP Validation
|--------------------------------------------------------------------------
|
*/

function isValidIP($str) {
   $octets = explode(".", $str);
   if (count($octets) !== 4) return false;
   foreach ($octets as $octet) {
      if (!ctype_digit($octet) || $octet < 0 || $octet > 255) return false;
      if (strlen($octet) > 1 && $octet[0] === "0") return false;
   }
   return true;
}


function isValidIP(string $str): bool {
  return ip2long($str) !== false;
}


function isValidIP(string $str): bool {
   return filter_var($str, FILTER_VALIDATE_IP);
}


print_r(isValidIP("0.0.0.0") . ' ' . true . '
');
print_r(isValidIP("12.255.56.1") . ' ' . true . '
');
print_r(isValidIP("137.255.156.100") . ' ' . true . '
');
print_r(isValidIP("") . ' ' . false . '
');
print_r(isValidIP("abc.def.ghi.jkl") . ' ' . false . '
');
print_r(isValidIP("123.456.789.0") . ' ' . false . '
');