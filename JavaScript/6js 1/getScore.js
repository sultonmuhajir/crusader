/*
|--------------------------------------------------------------------------
| Sequences and Series
|--------------------------------------------------------------------------
|
*/

function getScore(n) {
   let res = [];
   let x = 0;
   let y = 50;
   for (let i = 0; i < n; i++) {
      x = x + y;
      res.push(x);
      y += 50
   }
   return res[res.length - 1];
}


with(require('ramda')) let getScore = pipe(inc, range(0), sum, multiply `50`);


function getScore(n) {
   return n * (n + 1) * 25;
}


function getScore(n) {
   return n * 50 + (!!n ? getScore(n - 1) : 0);
}


function getScore(n) {
   rst = 50;
   if (n > 1) {
      rst = n * 50 + getScore(n - 1);
   }
   return rst;
}


console.log(getScore(3));
console.log(getScore(5));