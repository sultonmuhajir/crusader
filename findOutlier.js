function findOutlier(integers) {
   const even = integers.filter(el => Math.abs(el) % 2 == 0);
   const odd = integers.filter(el => Math.abs(el) % 2 == 1);
   return even.length == 1 ? Number(even) : Number(odd);
}


function findOutlier(int) {
   var even = int.filter(a => a % 2 == 0);
   var odd = int.filter(a => a % 2 != 0);
   return even.length == 1 ? even[0] : odd[0];
}


function findOutlier(int) {
   const evens = [],
      odds = [];
   int.forEach(function (num) {
      num % 2 != 0 ? odds.push(num) : evens.push(num)
   });
   return odds.length > 1 ? evens[0] : odds[0];
}


function findOutlier(ints) {
   return ints.slice(0, 3).reduce((a, b) => b % 2 === 0 ? a : a + 1, 0) >= 2 ?
      ints.find(i => i % 2 === 0) : ints.find(i => i % 2 !== 0);
}


console.log(findOutlier([2, 4, 0, 100, 4, -3, 2602, 36]), 11);
console.log(findOutlier([2, 4, 0, 100, 4, 11, 2602, 36]), 11);
console.log(findOutlier([160, 3, 1719, 19, 11, 13, -21]), 160);
