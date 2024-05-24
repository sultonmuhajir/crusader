/*
|--------------------------------------------------------------------------
| Decipher this!
|--------------------------------------------------------------------------
|
*/

function decipherThis(str) {
   return str
      .split(" ")
      .map((word) => {
         let charCode = word.match(/^\d+/)[0];
         let firstChar = String.fromCharCode(charCode);
         let remaining = word.slice(charCode.length);
         if (remaining.length < 2) return firstChar + remaining;
         let swapped = remaining[remaining.length - 1] + remaining.slice(1, -1) + remaining[0];
         return firstChar + swapped;
      })
      .join(" ");
}


function decipherThis(str) {
   return str.replace(
      /\b(\d+)(\w?)(\w*?)(\w?)\b/g,
      (_, $1, $2, $3, $4) => String.fromCharCode($1) + $4 + $3 + $2
   );
}


function decipherThis(str) {
   return str
      .split(" ")
      .map((w) =>
         w.replace(/^\d+/, (c) => String.fromCharCode(c)).replace(/^(.)(.)(.*)(.)$/, "$1$4$3$2")
      )
      .join(" ");
}


console.log(
   decipherThis("65 119esi 111dl 111lw 108dvei 105n 97n 111ka"),
   "A wise old owl lived in an oak"
);
console.log(
   decipherThis("84eh 109ero 104e 115wa 116eh 108sse 104e 115eokp"),
   "The more he saw the less he spoke"
);