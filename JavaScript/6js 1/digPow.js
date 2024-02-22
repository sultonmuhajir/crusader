/*
|--------------------------------------------------------------------------
| Playing with digits
|--------------------------------------------------------------------------
|
*/

function digPow(n, p) {
   let res = 0;
   for (let i = 0; i < n.toString().length; i++) {
      res += parseInt(n.toString()[i]) ** (p + i);
   }
   return res % n === 0 ? Math.floor(res / n) : -1;
}


function digPow(n, p) {
   let x = String(n)
      .split("")
      .reduce((s, d, i) => s + Math.pow(d, p + i), 0);
   return x % n ? -1 : x / n;
}


function digPow(n, p) {
   let s = 0;
   n.toString()
      .split("")
      .map(function (i) {
         s += Math.pow(i, p);
         p++;
      });
   return s % n == 0 ? s / n : -1;
}


console.log(digPow(89, 1), 1);
console.log(digPow(92, 1), -1);
console.log(digPow(46288, 3), 51);