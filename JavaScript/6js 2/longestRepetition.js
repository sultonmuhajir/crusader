/*
|--------------------------------------------------------------------------
| Character with longest consecutive repetition
|--------------------------------------------------------------------------
|
*/

function longestRepetition(s) {
   let maxC = "";
   let maxN = 0;
   let currC = "";
   let currN = 0;
   for (let char of s) {
      if (char === currC) {
         currN++;
      } else {
         currC = char;
         currN = 1;
      }
      if (currN > maxN) {
         maxN = currN;
         maxC = currC;
      }
   }
   return [maxC, maxN];
}


function longestRepetition(s) {
   return s
      .match(/(.)\1*|$/g)
      .reduce(([c, l], val) => (val.length > l ? [val[0], val.length] : [c, l]), [``, 0]);
}


function longestRepetition(s) {
   const [longest] = s.match(/(.)\1*|/g).sort((a, b) => b.length - a.length);
   return [longest[0] || "", longest.length];
}


console.log(longestRepetition("aaaabb"), ["a", 4]);
console.log(longestRepetition("bbbaaabaaaa"), ["a", 4]);
console.log(longestRepetition("cbdeuuu900"), ["u", 3]);
console.log(longestRepetition("abbbbb"), ["b", 5]);
console.log(longestRepetition("aabb"), ["a", 2]);
console.log(longestRepetition(""), ["", 0]);
console.log(longestRepetition("ba"), ["b", 1]);