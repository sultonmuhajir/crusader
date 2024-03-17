/*
|--------------------------------------------------------------------------
| Mexican Wave
|--------------------------------------------------------------------------
|
*/

function wave(str) {
   let res = [];
   for (let i = 0; i < str.length; i++) {
      if (str[i] !== " ") res.push(str.slice(0, i) + str[i].toUpperCase() + str.slice(i + 1));
   }
   return res;
}


const wave = (w) =>
   [...w].map((a, i) => w.slice(0, i) + a.toUpperCase() + w.slice(i + 1)).filter((a) => a != w);


function wave(str) {
   let result = [];
   str.split("").forEach((char, index) => {
      if (/[a-z]/.test(char)) {
         result.push(str.slice(0, index) + char.toUpperCase() + str.slice(index + 1));
      }
   });
   return result;
}


console.log(wave("hello"), ["Hello", "hEllo", "heLlo", "helLo", "hellO"]);