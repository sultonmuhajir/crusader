/*
|--------------------------------------------------------------------------
| Tribonacci Sequence
|--------------------------------------------------------------------------
|
*/

function tribonacci(signature, n) {
   if (n === 0) return [];
   let res = signature.slice(0, n);
   while (res.length < n) {
      let x = res.slice(-3).reduce((a, b) => a + b, 0);
      res.push(x);
   }
   return res;
}


function tribonacci(signature, n) {
   return [...Array(n)]
      .reduce((arr, _, idx) => [...arr, arr[idx] + arr[idx + 1] + arr[idx + 2]], signature)
      .slice(0, n);
}


function tribonacci(s, n) {
   let arr = [];
   for (let i = 0; i < n; i++) {
      arr.push(i < 3 ? s[i] : arr[i - 1] + arr[i - 2] + arr[i - 3]);
   }
   return arr;
}


console.log(tribonacci([1, 1, 1], 10), [1, 1, 1, 3, 5, 9, 17, 31, 57, 105]);
console.log(tribonacci([0, 0, 1], 10), [0, 0, 1, 1, 2, 4, 7, 13, 24, 44]);
console.log(tribonacci([0, 1, 1], 10), [0, 1, 1, 2, 4, 7, 13, 24, 44, 81]);