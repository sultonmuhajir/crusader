/*
|--------------------------------------------------------------------------
| Length of missing array
|--------------------------------------------------------------------------
|
*/

function getLengthOfMissingArray(x) {
   if (x == null || x.length == 0) {
      return 0;
   } else {
      let res = [];
      for (let i = 0; i < x.length; i++) {
         if (x[i] == null) {
            return 0
         } else {
            res.push(x[i].length);
         }
      }
      const arr = res.sort((a, b) => a - b);
      if (arr[0] == 0) {
         return 0
      } else {
         const last = arr[arr.length - 1];
         let i = 0;
         for (let j = arr[0]; j <= last; j++) {
            if (j != arr[i]) {
               return j;
            }
            i += 1;
         }
      }
   }
}


function getLengthOfMissingArray(arr) {
   return !arr || (ar = arr.map((x, i) => x ? x.length : 0).sort((a, b) => a - b)).indexOf(0) > -1 ?
      0 : ar.filter((x, i) => x != i + ar[0]).concat([1])[0] - 1
}


function getLengthOfMissingArray(arr) {
   if (arr == null || arr.length == 0 || arr.filter(x => x == null || x.length == 0).length > 0 || !arr)
      return 0;
   let sum = arr.map(x => x.length).reduce((a, b) => a + b, 0);
   let expectedSum = ((arr.length + 1) / 2) * (2 * Math.min(...arr.map(x => x.length)) + (arr.length));
   return Math.floor(expectedSum) - sum;
}


function getLengthOfMissingArray(arr) {
   return a ? (a = a.map(e => e ? e.length : 0)).includes(0) ? 0 : a
      .sort((x, y) => x - y)
      .reduce((r, e, i, a) => r ? r : (e + 1) === a[i + 1] ? 0 : e + 1, 0) : 0;
}


console.log(getLengthOfMissingArray([
   [1, 0, 3, 3, 3, 1, 2, 3, 4, 0, 4],
   [4, 2],
   [1, 4, 4, 3, 1],
   [3, 1, 2, 0, 2, 4, 1],
   [],
   [3, 1, 0],
   [1, 1, 2, 0],
   [2, 4, 0, 3, 2, 2, 3, 0],
   [4, 0, 1, 0, 0, 4],
   [2, 4, 3, 0, 0, 3, 3, 0, 3],
   [4, 4, 3, 3, 2, 3, 4, 0, 0, 2]
]), 0);
console.log(getLengthOfMissingArray([]), 0);
console.log(getLengthOfMissingArray([null]), 0);