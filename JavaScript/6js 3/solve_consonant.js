/*
|--------------------------------------------------------------------------
| Consonant value
|--------------------------------------------------------------------------
|
*/

function solve(s) {
   const isConsonant = (char) => !"aeiou".includes(char);
   let res = 0;
   let temp = 0;
   for (const char of s) {
      if (isConsonant(char)) {
         temp += char.charCodeAt(0) - 96;
         res = Math.max(res, temp);
      } else {
         temp = 0;
      }
   }
   return res;
}


function solve(s) {
   return Math.max(
      ...s.split(/[aeiou]+/).map((e) => [...e].reduce((a, b) => a + b.charCodeAt() - 96, 0))
   );
}


function solve(s) {
   return Math.max(
      ...s.match(/[^aeiou]+/g).map((x) => [...x].reduce((s, v) => s + v.charCodeAt() - 96, 0))
   );
}


console.log(solve("zodiac"), 26);
console.log(solve("chruschtschov"), 80);
console.log(solve("khrushchev"), 38);
console.log(solve("strength"), 57);
console.log(solve("catchphrase"), 73);
console.log(solve("twelfthstreet"), 103);
console.log(solve("mischtschenkoana"), 80);
console.log(solve("az"), 26);