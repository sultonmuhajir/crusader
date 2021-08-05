/*
|--------------------------------------------------------------------------
| Find the odd int
|--------------------------------------------------------------------------
|
*/

function findOdd(a) {
   const unq = [...new Set(a)];
   for (let i in unq) {
      if ((a.filter(el => el == unq[i]).length) % 2 == 1) {
         return unq[i];
      }
   }
}


const findOdd = (xs) => xs.reduce((a, b) => a ^ b);


function findOdd(a) {
   return a.find((number) => a.filter((n) => number === n).length % 2)
}


function findOdd(a) {
   var trace = {};
   a.forEach(function (x) {
      if (trace[x]) delete trace[x];
      else trace[x] = true;
   });
   return parseInt(Object.keys(trace)[0]);
}


console.log(findOdd([20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5]), 5);
console.log(findOdd([1, 1, 2, -2, 5, 2, 4, 4, -1, -2, 5]), -1);
console.log(findOdd([20, 1, 1, 2, 2, 3, 3, 5, 5, 4, 20, 4, 5]), 5);
console.log(findOdd([10]), 10);
console.log(findOdd([1, 1, 1, 1, 1, 1, 10, 1, 1, 1, 1]), 10);
console.log(findOdd([5, 4, 3, 2, 1, 5, 4, 3, 2, 10, 10]), 1);