/*
|--------------------------------------------------------------------------
| Roman Numerals Encoder
|--------------------------------------------------------------------------
|
*/

function solution(num) {
   const x = {
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
   let res = "";
   for (let key in x) {
      while (num >= x[key]) {
         res += key;
         num -= x[key];
      }
   }
   return res;
}


function solution(number) {
   let result = "",
      decimals = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1],
      roman = ["M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"];

   decimals.map(function (value, index) {
      while (number >= value) {
         result += roman[index];
         number -= value;
      }
   });

   return result;
}


function solution(number) {
   const table = [
      [1000, "M"],
      [900, "CM"],
      [500, "D"],
      [400, "CD"],
      [100, "C"],
      [90, "XC"],
      [50, "L"],
      [40, "XL"],
      [10, "X"],
      [9, "IX"],
      [5, "V"],
      [4, "IV"],
      [1, "I"],
   ];
   for (let [num, notation] of table) {
      if (number >= num) return notation + solution(number - num);
   }
   return "";
}


console.log(solution(1001), "MI");
console.log(solution(1990), "MCMXC");
console.log(solution(2007), "MMVII");
console.log(solution(11), "XI");
console.log(solution(19), "XIX");
console.log(solution(22), "XXII");
console.log(solution(15), "XV");