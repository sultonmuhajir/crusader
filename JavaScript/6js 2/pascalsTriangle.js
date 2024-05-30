/*
|--------------------------------------------------------------------------
| Pascal's Triangle
|--------------------------------------------------------------------------
|
*/

function pascalsTriangle(n) {
   let res = [];
   let x = 0;
   for (let i = 0; i < n; i++) {
      x = res.length - i;
      for (let j = 0; j < i + 1; j++) {
         j === 0 || j === i ? res.push(1) : res.push(res[x + j] + res[x + j - 1]);
      }
   }
   return res;
}


const pascalsTriangle = (n, arr = [], i = 0) =>
   n - i
      ? ((arr[i] = [...(arr[i - 1] || arr).map((val, idx) => val + (arr[i - 1][idx - 1] || 0)), 1]),
        pascalsTriangle(n, arr, ++i))
      : [].concat(...arr);


function pascalsTriangle(n) {
   let arr = [1];
   --n;
   for (let i = 0; i < n; ++i) {
      arr.push(1);
      for (let j = arr.length - 2 - i, jj = j + i; j < jj; ) arr.push(arr[j] + arr[++j]);
      arr.push(1);
   }
   return arr;
}


console.log(pascalsTriangle(1), [1]);
console.log(pascalsTriangle(2), [1, 1, 1]);
console.log(pascalsTriangle(4), [1, 1, 1, 1, 2, 1, 1, 3, 3, 1]);