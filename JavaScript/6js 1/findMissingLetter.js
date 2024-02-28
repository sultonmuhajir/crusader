/*
|--------------------------------------------------------------------------
| Find the missing letter
|--------------------------------------------------------------------------
|
*/

function findMissingLetter(array) {
   for (let i = 0; i < array.length - 1; i++) {
      if (array[i].charCodeAt(0) + 1 !== array[i + 1].charCodeAt(0)) {
         return String.fromCharCode(array[i].charCodeAt(0) + 1);
      }
   }
}


function findMissingLetter(array) {
   let i = array[0].charCodeAt(0);
   return String.fromCharCode(array.find((el) => el.charCodeAt(0) != i++).charCodeAt(0) - 1);
}


function findMissingLetter(array) {
   return String.fromCharCode(
      array.map((x) => x.charCodeAt(0)).filter((x, i, arr) => x + 1 !== arr[i + 1])[0] + 1
   );
}


console.log(findMissingLetter(["a", "b", "c", "d", "f"]), "e");
console.log(findMissingLetter(["O", "Q", "R", "S"]), "P");