/*
|--------------------------------------------------------------------------
| Primorial Of a Number
|--------------------------------------------------------------------------
|
*/

function isPrime(num) {
   for (let i = 2; i <= Math.sqrt(num); i++) {
      if (num % i === 0) return false;
   }
   return num > 1;
}
function numPrimorial(n) {
   let primes = [];
   for (let num = 2; primes.length < n; num++) {
      if (isPrime(num)) primes.push(num);
   }
   return primes.reduce((acc, curr) => acc * curr, 1);
}


const numPrimorial = (a, b = 2) =>
   ((f) => (a ? (f(b) ? b * numPrimorial(--a, ++b) : 1 * numPrimorial(a, ++b)) : 1))(
      (f = (a, b = 2) => (b * b > a ? !0 : a % b ? f(a, ++b) : !1))
   );


function numPrimorial(n) {
   const arr = [];
   let num = 0;
   while (arr.length < n) {
      if (
         !Array(++num)
            .fill(1)
            .join(``)
            .match(/^1?$|^(11+?)\1+$/)
      )
         arr.push(num);
   }
   return arr.reduce((pre, val) => pre * val);
}


console.log(numPrimorial(3), 30);
console.log(numPrimorial(4), 210);
console.log(numPrimorial(5), 2310);
console.log(numPrimorial(8), 9699690);
console.log(numPrimorial(9), 223092870);