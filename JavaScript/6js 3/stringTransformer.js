/*
|--------------------------------------------------------------------------
| String transformer
|--------------------------------------------------------------------------
|
*/

function stringTransformer(str) {
   let x = str
      .split("")
      .map((char) => {
         return char === char.toLowerCase() ? char.toUpperCase() : char.toLowerCase();
      })
      .join("");
   return x.split(/(\s+)/).filter(Boolean).reverse().join("");
}


function stringTransformer(str) {
   return str
      .split(" ")
      .reverse()
      .join(" ")
      .split("")
      .map((v) => (v == v.toUpperCase() ? v.toLowerCase() : v.toUpperCase()))
      .join("");
}


function stringTransformer(str) {
   let s = "";
   for (let i = 0; i < str.length; ++i)
      if (str[i] == str[i].toLowerCase()) s += str[i].toUpperCase();
      else s += str[i].toLowerCase();
   return s.split(" ").reverse().join(" ");
}


console.log(stringTransformer("Example string"), "STRING eXAMPLE");