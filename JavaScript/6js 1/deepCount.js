/*
|--------------------------------------------------------------------------
| Array Deep Count
|--------------------------------------------------------------------------
|
*/

function deepCount(a) {
   let count = 0;
   function countHelper(arr) {
      count += arr.length;
      for (let element of arr) {
         if (Array.isArray(element)) countHelper(element);
      }
   }
   countHelper(a);
   return count;
}


function deepCount(a) {
   return a.reduce((s, e) => s + (Array.isArray(e) ? deepCount(e) : 0), a.length);
}


function deepCount(a) {
   let count = a.length;
   for (let i = 0; i < a.length; i++) if (Array.isArray(a[i])) count += deepCount(a[i]);
   return count;
}


console.log(deepCount([]), 0, "Expected 0");
console.log(deepCount([1, 2, 3]), 3, "Expected 3");
console.log(deepCount(["x", "y", ["z"]]), 4, "Expected 4");
console.log(deepCount([1, 2, [3, 4, [5]]]), 7, "Expected 7");
console.log(deepCount([[[[[[[[[]]]]]]]]]), 8, "Expected 8");