// Array.diff


function arrayDiff(a, b) {
   for (let i = 0; i < b.length; i++) {
      a = a.filter(x => x != b[i])
   }
   return a;
}


function arrayDiff(a, b) {
   return a.filter(e => !b.includes(e));
}


function arrayDiff(a, b) {
   return a.filter(function (x) {
      return b.indexOf(x) == -1;
   });
}


console.log(arrayDiff([], [4, 5]), []);
console.log(arrayDiff([3, 4], [3]), [4]);
console.log(arrayDiff([1, 8, 2], []), [1, 8, 2]);
console.log(arrayDiff([1, 2, 3], [1, 2]), [3])