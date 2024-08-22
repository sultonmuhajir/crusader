/*
|--------------------------------------------------------------------------
| Steps in Primes
|--------------------------------------------------------------------------
|
*/

function step(g, m, n) {
   res = [];
   for (let i = m; i <= n; i++) {
      for (let j = 2; j <= i; j++) {
         if (j == i) {
            x = i - g;
            if (res.includes(x)) return [x, i];
            res.push(i);
         }
         if (i % j == 0) break;
      }
   }
   return null;
}


function isPrime(n) {
   let r = Math.sqrt(n) | 0;
   for (let i = 2; i <= r && n % i; i++);
   return i > r;
}
function step(g, m, n) {
   for (let i = m; i <= n - g; i++) {
      if (isPrime(i) && isPrime(i + g)) {
         return [i, i + g];
      }
   }
   return null;
}


const isPrime = (a, b = 2) => (b * b > a ? !0 : a % b ? isPrime(a, ++b) : !1);
const step = (a, b, c) => {
   while (b < c) {
      if (isPrime(b) && isPrime(b + a)) return [b, b + a];
      ++b;
   }
   return null;
};


console.log(step(2, 100, 110), [101, 103]);
console.log(step(4, 100, 110), [103, 107]);
console.log(step(6, 100, 110), [101, 107]);
console.log(step(8, 300, 400), [359, 367]);
console.log(step(10, 300, 400), [307, 317]);