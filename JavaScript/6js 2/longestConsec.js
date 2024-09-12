/*
|--------------------------------------------------------------------------
| Consecutive strings
|--------------------------------------------------------------------------
|
*/

function longestConsec(strarr, k) {
   const n = strarr.length;
   if (n === 0 || k > n || k <= 0) return "";
   let res = "";
   for (let i = 0; i <= n - k; i++) {
      let curr = strarr.slice(i, i + k).join("");
      if (curr.length > res.length) res = curr;
   }
   return res;
}


function longestConsec(source, k) {
   return new Array(Math.max(0, Math.min(k >= 0 ? source.length - k + 1 : k, source.length)))
      .fill("")
      .map((s, i) => source.slice(i, i + k).join(""))
      .reduce((max, x) => (max.length < x.length ? x : max), "");
}


function longestConsec(strarr, k) {
   if (k <= 0 || k > strarr.length) return "";
   return strarr
      .map((value, index) => strarr.slice(index, index + k).join(""))
      .reduce((longest, current) => (current.length > longest.length ? current : longest));
}


console.log(longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], 2), "abigailtheta");
console.log(longestConsec([], 3), "");
console.log(longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], -2), "");
console.log(longestConsec(["it", "wkppv", "ixoyx", "3452", "zzzzzzzzzzzz"], 15), "");
console.log(longestConsec(["it", "wkppv", "ixoyx", "3452", "zzzzzzzzzzzz"], 0), "");