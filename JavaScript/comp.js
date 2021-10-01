/*
|--------------------------------------------------------------------------
| Are they the "same"?
|--------------------------------------------------------------------------
|
*/

function comp(array1, array2) {
   if (array1 == null || array2 == null) {
      return false;
   } else {
      const a1 = array1.map(i => i ** 2).sort((a, b) => a - b);
      const a2 = array2.sort((a, b) => a - b);
      return JSON.stringify(a1) === JSON.stringify(a2);
   }
}


function comp(a, b) {
   return !!a && !!b && a.map(x => x * x).sort().join() == b.sort().join();
}


function comp(array1, array2) {
   let arr1 = array1 ? array1.map(e => e * e).sort((a, b) => a - b) : 1;
   let arr2 = array2 ? array2.sort((a, b) => a - b).join('') : 1;
   return arr1.join('') == arr2;
}


function comp(a, b) {
   if (!a || !b || a.length !== b.length) return false;
   return a.map(x => x * x).sort().toString() === b.sort().toString();
}


function comp(a1, a2) {
   return a2 != null && a1.map(x => x * x).sort().join('-') == a2.sort().join('-')
}


a1 = [121, 144, 19, 161, 19, 144, 19, 11];
a2 = [11 * 11, 121 * 121, 144 * 144, 19 * 19, 161 * 161, 19 * 19, 144 * 144, 19 * 19];
// a1 = [2, 3, 2]
// a2 = [4, 9, 6]
console.log(comp(a1, a2), true);