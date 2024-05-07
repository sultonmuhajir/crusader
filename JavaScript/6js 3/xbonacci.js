/*
|--------------------------------------------------------------------------
| Fibonacci, Tribonacci and friends
|--------------------------------------------------------------------------
|
*/

function Xbonacci(signature, n) {
   const res = signature.slice(0, n);
   for (let i = signature.length; i < n; i++) {
      let sum = 0;
      for (let j = 1; j <= signature.length; j++) sum += res[i - j];
      res.push(sum);
   }
   return res;
}


const Xbonacci = (a, b, c = [...a]) =>
   c.length < b
      ? Xbonacci(a, b, [...c, c.slice(-a.length).reduce((a, b) => a + b)])
      : c.slice(0, b);


function Xbonacci(arr, n) {
   const result = arr.slice(0, n);
   const length = arr.length;
   while (result.length < n) {
      result.push(result.slice(-length).reduce((a, b) => a + b));
   }
   return result;
}


console.log(Xbonacci([0, 1], 10), [0, 1, 1, 2, 3, 5, 8, 13, 21, 34]);
console.log(Xbonacci([1, 1], 10), [1, 1, 2, 3, 5, 8, 13, 21, 34, 55]);
console.log(Xbonacci([0, 0, 0, 0, 1], 10), [0, 0, 0, 0, 1, 1, 2, 4, 8, 16]);
console.log(Xbonacci([1, 0, 0, 0, 0, 0, 1], 10), [1, 0, 0, 0, 0, 0, 1, 2, 3, 6]);
console.log(
   Xbonacci([1, 0, 0, 0, 0, 0, 0, 0, 0, 0], 20),
   [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 2, 4, 8, 16, 32, 64, 128, 256]
);