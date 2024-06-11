/*
|--------------------------------------------------------------------------
| Sort the odd
|--------------------------------------------------------------------------
|
*/

function sortArray(array) {
   const odd = array.filter((num) => num % 2 !== 0).sort((a, b) => a - b);
   return array.map((num) => (num % 2 !== 0 ? odd.shift() : num));
}


function sortArray(array) {
   for (let i = 0; i < array.length; i++) {
      for (let j = i + 1; j < array.length; j++) {
         if (array[i] % 2 != 0 && array[j] % 2 != 0 && array[j] < array[i]) {
            let tmp = array[i];
            array[i] = array[j];
            array[j] = tmp;
         }
      }
   }
   return array;
}


function sortArray(array) {
   const odds = array.filter((n) => n & 1).sort((a, b) => a - b);
   return array.map((n) => (n & 1 ? odds.shift() : n));
}


console.log(sortArray([5, 3, 2, 8, 1, 4]), [1, 3, 2, 8, 5, 4]);
console.log(sortArray([5, 3, 1, 8, 0]), [1, 3, 5, 8, 0]);
console.log(sortArray([]), []);