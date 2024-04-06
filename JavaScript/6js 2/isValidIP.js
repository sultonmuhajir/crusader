/*
|--------------------------------------------------------------------------
| IP Validation
|--------------------------------------------------------------------------
|
*/

function isValidIP(str) {
   const octets = str.split(".");
   if (octets.length !== 4) return false;
   for (let i = 0; i < octets.length; i++) {
      const octet = octets[i];
      if (!/^\d+$/.test(octet) || octet < 0 || octet > 255) return false;
      if (octet.length > 1 && octet[0] === "0") return false;
   }
   return true;
}


const isValidIP = require("net").isIPv4;


function isValidIP(str) {
   return /^(([1-9]?\d|1\d\d|2[0-4]\d|25[0-5])(\.(?!$)|$)){4}$/.test(str);
}


function isValidIP(str) {
   return (
      str.split(".").filter(function (v) {
         return +v <= 255 && +v >= 0 && v.length == String(+v).length;
      }).length == 4
   );
}


console.log(isValidIP("0.0.0.0"), true);
console.log(isValidIP("12.255.56.1"), true);
console.log(isValidIP("137.255.156.100"), true);
console.log(isValidIP(""), false);
console.log(isValidIP("abc.def.ghi.jkl"), false);
console.log(isValidIP("123.456.789.0"), false);
console.log(isValidIP("12.34.56"), false);
console.log(isValidIP("01.02.03.04"), false);
console.log(isValidIP("256.1.2.3"), false);
console.log(isValidIP("1.2.3.4.5"), false);
console.log(isValidIP("123,45,67,89"), false);
console.log(isValidIP("1e0.1e1.1e2.2e2"), false);
console.log(isValidIP(" 1.2.3.4"), false);
console.log(isValidIP("1.2.3.4 "), false);
console.log(isValidIP("12.34.56.-7"), false);
console.log(isValidIP("1.2.3.4\n"), false);
console.log(isValidIP("\n1.2.3.4"), false);