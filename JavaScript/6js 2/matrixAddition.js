/*
|--------------------------------------------------------------------------
| Matrix Addition
|--------------------------------------------------------------------------
|
*/

function matrixAddition(a, b) {
   let res = [];
   for (let i = 0; i < a.length; i++) {
      let row = [];
      for (let j = 0; j < a.length; j++) {
         row.push(a[i][j] + b[i][j]);
      }
      res.push(row);
   }
   return res;
}


const R = require("ramda"),
   matrixAddition = R.zipWith(R.zipWith(R.add));


function matrixAddition(a, b) {
   return a.map((a, i) => a.map((a, j) => a + b[i][j]));
}


function matrixAddition(a, b) {
   return a.map(function (row, i) {
      return row.map(function (col, ii) {
         return col + b[i][ii];
      });
   });
}