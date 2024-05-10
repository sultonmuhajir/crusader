/*
|--------------------------------------------------------------------------
| Grouped by commas
|--------------------------------------------------------------------------
|
*/

function groupByCommas(n) {
   let res = []
   const x = String(n).split("").reverse();
   for (let i = 0; i < x.length; i++) {
      if (i % 3 == 0 && i != 0) {
         res.push(',')
      }
      res.push(x[i])
   }
   return res.reverse().join('')
}


function groupByCommas(n) {
   return n.toLocaleString()
}


function groupByCommas(n) {
   return ('' + n).split('').reverse().reduce((a, c, i) => ((i > 0 && i % 3 === 0) ? c + ',' : c) + a, '');
}


function groupByCommas(n) {
   return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


console.log(groupByCommas(1), '1');
console.log(groupByCommas(10), '10');
console.log(groupByCommas(100), '100');
console.log(groupByCommas(1000), '1,000');
console.log(groupByCommas(10000), '10,000');
console.log(groupByCommas(100000), '100,000');
console.log(groupByCommas(1000000), '1,000,000');
console.log(groupByCommas(35235235), '35,235,235');