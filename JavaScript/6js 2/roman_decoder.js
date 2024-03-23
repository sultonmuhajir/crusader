/*
|--------------------------------------------------------------------------
| Roman Numerals Decoder
|--------------------------------------------------------------------------
|
*/

function solution(roman) {
   const x = {
      I: 1,
      V: 5,
      X: 10,
      L: 50,
      C: 100,
      D: 500,
      M: 1000,
   };
   let res = 0;
   for (let i = 0; i < roman.length; i++) {
      const current = x[roman[i]];
      const next = x[roman[i + 1]];
      if (next && current < next) {
         res += next - current;
         i++;
      } else {
         res += current;
      }
   }
   return res;
}


function solution(roman) {
   let conversion = {
      M: 1000,
      CM: 900,
      D: 500,
      CD: 400,
      C: 100,
      XC: 90,
      L: 50,
      XL: 40,
      X: 10,
      IX: 9,
      V: 5,
      IV: 4,
      I: 1,
   };
   return roman
      .match(/CM|CD|XC|XL|IX|IV|\w/g)
      .reduce((accum, roman) => accum + conversion[roman], 0);
}


function solution(roman) {
   let value = { I: 1, V: 5, X: 10, L: 50, C: 100, D: 500, M: 1000 };
   return roman
      .split("")
      .map((d) => value[d])
      .reduce((s, v, i, o) => s + (o[i + 1] > v ? -v : v), 0);
}


console.log(solution("XXI"), 21);
console.log(solution("I"), 1);
console.log(solution("IV"), 4);
console.log(solution("MMVIII"), 2008);
console.log(solution("MDCLXVI"), 1666);