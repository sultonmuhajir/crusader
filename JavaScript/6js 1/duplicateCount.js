/*
|--------------------------------------------------------------------------
| Counting Duplicates
|--------------------------------------------------------------------------
|
*/

function duplicateCount(text) {
   const arr = text.toLowerCase().split("");
   const unq = [...new Set(arr)];
   let count = 0;
   for (let i in unq) {
      if ((arr.filter(el => el == unq[i]).length >= 2)) {
         count++;
      }
   }
   return count;
}


const duplicateCount = (text) => (text.match(/(\w)(?=(?!.*\1.*\1).*\1)/gi) || []).length;


function duplicateCount(text) {
   return text.toLowerCase().split('').filter(function (val, i, arr) {
      return arr.indexOf(val) !== i && arr.lastIndexOf(val) === i;
   }).length;
}


function duplicateCount(text) {
   return (text.toLowerCase().split('').sort().join('').match(/([^])\1+/g) || []).length;
}


console.log(duplicateCount(""), 0);
console.log(duplicateCount("abcde"), 0);
console.log(duplicateCount("aabbcde"), 2);
console.log(duplicateCount("aabBcde"), 2, "should ignore case");
console.log(duplicateCount("Indivisibility"), 1)
console.log(duplicateCount("Indivisibilities"), 2, "characters may not be adjacent")