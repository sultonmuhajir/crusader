/*
|--------------------------------------------------------------------------
| Unique In Order
|--------------------------------------------------------------------------
|
*/

function uniqueInOrder(iterable) {
   if (!iterable) return [];
   let res = [iterable[0]];
   for (let i = 1; i < iterable.length; i++) {
      if (iterable[i] !== iterable[i - 1]) {
         res.push(iterable[i]);
      }
   }
   return res;
}


var uniqueInOrder = function (iterable) {
   return [...iterable].filter((a, i) => a !== iterable[i - 1]);
};


var uniqueInOrder = function (iterable) {
   var res = [];
   for (var i = 0; i < iterable.length; i++) {
      if (iterable[i] != iterable[i + 1]) res.push(iterable[i]);
   }
   return res;
};


console.log(uniqueInOrder("AAAABBBCCDAABBB"), ["A", "B", "C", "D", "A", "B"]);