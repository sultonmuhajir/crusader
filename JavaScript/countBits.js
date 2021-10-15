/*
|--------------------------------------------------------------------------
| Bit Counting
|--------------------------------------------------------------------------
|
*/

function countBits(n) {
   return n.toString(2).split('').filter(i => i == '1').length;
}


function countBits(n) {
   for (c = 0; n; n >>= 1) c += n & 1
   return c;
}


var countBits = function (n) {
   return n.toString(2).replace(/0/g, '').length;
}


var countBits = function (n) {
   a = n.toString(2).match(/1/g);
   return a == null ? 0 : a.length;
}


var countBits = function (n) {
   return n.toString(2).split("").reduce((a, b) => parseInt(a) + parseInt(b), 0);
}


console.log(countBits(0), 0);
console.log(countBits(4), 1);
console.log(countBits(7), 3);
console.log(countBits(9), 2);
console.log(countBits(10), 2);
console.log(countBits(1234), 5);