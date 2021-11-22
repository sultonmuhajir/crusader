/*
|--------------------------------------------------------------------------
| Detect Pangram
|--------------------------------------------------------------------------
|
*/

function isPangram(string) {
   const str = string.toLowerCase();
   for (let char of 'abcdefghijklmnopqrstuvwxyz') {
      if (!str.includes(char)) {
         return false;
      }
   }
   return true;
}


function isPangram(string) {
   string = string.toLowerCase();
   return "abcdefghijklmnopqrstuvwxyz".split("").every(function (x) {
      return string.indexOf(x) !== -1;
   });
}


function isPangram(string) {
   return 'abcdefghijklmnopqrstuvwxyz'.split('').every((x) => string.toLowerCase().includes(x));
}


function isPangram(string) {
   return (string.match(/([a-z])(?!.*\1)/ig) || []).length === 26;
}


console.log(isPangram('The quick brown fox jumps over the lazy dog.'), true);
console.log(isPangram('This is not a pangram.'), false);