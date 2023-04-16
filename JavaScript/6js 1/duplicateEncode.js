/*
|--------------------------------------------------------------------------
| Duplicate Encoder
|--------------------------------------------------------------------------
|
*/

function duplicateEncode(word) {
   return word
      .toLowerCase()
      .split("")
      .map(function (char, i, arr) {
         return arr.indexOf(char) == arr.lastIndexOf(char) ? "(" : ")";
      })
      .join("");
}


const duplicateEncode = (w) =>
   w.replace(/./g, (c) => (new RegExp(`([${c}]).*\\1`, "gi").test(w) ? ")" : "("));


function duplicateEncode(word) {
   let unique = "";
   word = word.toLowerCase();
   for (let i = 0; i < word.length; i++) {
      unique += word.lastIndexOf(word[i]) == word.indexOf(word[i]) ? "(" : ")";
   }
   return unique;
}


function duplicateEncode(word) {
   word = word.toLowerCase();
   return word.replace(/./g, (m) => (word.indexOf(m) == word.lastIndexOf(m) ? "(" : ")"));
}


console.log(duplicateEncode("din"), "(((");
console.log(duplicateEncode("recede"), "()()()");
console.log(duplicateEncode("Success"), ")())())", "should ignore case");
console.log(duplicateEncode("(( @"), "))((");