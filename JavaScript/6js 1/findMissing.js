/*
|--------------------------------------------------------------------------
| Find the missing term in an Arithmetic Progression
|--------------------------------------------------------------------------
|
*/

function findMissing(list) {
   const n = list.length;
   const x1 = list[1] - list[0];
   const x2 = list[n - 1] - list[n - 2];
   const x = Math.abs(x1) > Math.abs(x2) ? x2 : x1;
   for (let i = 1; i < n; i++) {
      if (list[i] - list[i - 1] !== x) {
         return list[i - 1] + x;
      }
   }
}


function findMissing(list) {
   return (
      ((list[0] + list[list.length - 1]) / 2) * (list.length + 1) -
      list.reduce((pre, val) => pre + val)
   );
}


function findMissing(list) {
   let pattern = (list[list.length - 1] - list[0]) / list.length;
   let i = 0;
   while (list[i] + pattern === list[i + 1]) i++;
   return list[i] + pattern;
}


console.log(findMissing([1, 3, 4]), 2);