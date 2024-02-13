/*
|--------------------------------------------------------------------------
| Split Strings
|--------------------------------------------------------------------------
|
*/

function solution(str) {
   let res = [];
   for (let i = 0; i < str.length; i += 2) {
      let x = str.slice(i, i + 2);
      if (x.length < 2) x += "_";
      res.push(x);
   }
   return res;
}


function solution(s) {
   return (s + "_").match(/.{2}/g) || [];
}


function solution(str) {
   let res = [];
   for (var i = 0; i < str.length; i += 2) res.push(`${str[i] + (str[i + 1] || "_")}`);
   return res;
}


console.log(solution("abcdef"), ["ab", "cd", "ef"]);
console.log(solution("abcdefg"), ["ab", "cd", "ef", "g_"]);
console.log(solution(""), []);