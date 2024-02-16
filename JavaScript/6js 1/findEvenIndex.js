/*
|--------------------------------------------------------------------------
| Equal Sides Of An Array
|--------------------------------------------------------------------------
|
*/

function findEvenIndex(arr) {
   for (let i = 0; i < arr.length; i++) {
      if (
         arr.slice(0, i).reduce((x, y) => x + y, 0) === arr.slice(i + 1).reduce((x, y) => x + y, 0)
      ) {
         return i;
      }
   }
   return -1;
}


function findEvenIndex(arr) {
   return arr.findIndex(
      (e, i, a) =>
         a.slice(0, i).reduce((p, c) => p + c, 0) == a.slice(i + 1).reduce((p, c) => p + c, 0)
   );
}


function findEvenIndex(arr) {
   let left = 0;
   let right = arr.reduce((s, n) => s + n, 0);
   for (let i = 0; i < arr.length; i++) {
      right -= arr[i];
      if (left === right) return i;
      left += arr[i];
   }
   return -1;
}


console.log(findEvenIndex([1, 2, 3, 4, 3, 2, 1]), 3, "The array was: [1,2,3,4,3,2,1] \n");
console.log(findEvenIndex([1, 100, 50, -51, 1, 1]), 1, "The array was: [1,100,50,-51,1,1] \n");
console.log(findEvenIndex([1, 2, 3, 4, 5, 6]), -1, "The array was: [1,2,3,4,5,6] \n");