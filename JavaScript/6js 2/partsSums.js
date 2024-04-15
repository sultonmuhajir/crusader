/*
|--------------------------------------------------------------------------
| Sums of Parts
|--------------------------------------------------------------------------
|
*/

function partsSums(ls) {
   let sum = ls.reduce((acc, val) => acc + val, 0);
   const res = [sum];
   for (let i = 0; i < ls.length; i++) {
      sum -= ls[i];
      res.push(sum);
   }
   return res;
}


const partsSums = (ls) =>
   ls.reduceRight((res, el) => (res.push(res[res.length - 1] + el), res), [0]).reverse();


function partsSums(ls) {
   let r = [0];
   for (let i in ls.reverse()) {
      r.push(ls[i] + r[i]);
   }
   return r.reverse();
}


console.log(partsSums([]), [0]);
console.log(partsSums([0, 1, 3, 6, 10]), [20, 20, 19, 16, 10, 0]);
console.log(partsSums([1, 2, 3, 4, 5, 6]), [21, 20, 18, 15, 11, 6, 0]);