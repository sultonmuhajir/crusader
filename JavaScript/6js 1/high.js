/*
|--------------------------------------------------------------------------
| Highest Scoring Word
|--------------------------------------------------------------------------
|
*/

function high(x) {
   let max = 0;
   let res = "";
   for (word of x.split(" ")) {
      let score = 0;
      for (let i = 0; i < word.length; i++) score += word.charCodeAt(i) - 96;
      if (score > max) {
         max = score;
         res = word;
      }
   }
   return res;
}


function high(x) {
   const score = (s) => s.split("").reduce((m, i) => m + i.charCodeAt(0) - 96, 0);
   return x.split(" ").reduce((s, n) => (score(s) < score(n) ? n : s));
}


function high(x) {
   const alpha = "abcdefghijklmnopqrstuvwxyz";
   const words = x.split(" ");
   const scores = words
      .map((x) => [...x].map((y) => alpha.indexOf(y) + 1))
      .map((x) => x.reduce((a, b) => a + b, 0));
   return words[scores.indexOf(Math.max(...scores))];
}


console.log(high("man i need a taxi up to ubud"), "taxi");
console.log(high("what time are we climbing up the volcano"), "volcano");
console.log(high("take me to semynak"), "semynak");
console.log(high("aa b"), "aa");
console.log(high("b aa"), "b");
console.log(high("bb d"), "bb");
console.log(high("d bb"), "d");
console.log(high("aaa b"), "aaa");