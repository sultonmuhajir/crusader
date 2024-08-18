/*
|--------------------------------------------------------------------------
| Playing with passphrases
|--------------------------------------------------------------------------
|
*/

function playPass(s, n) {
   return s
      .replace(/[A-Z]/g, (l) => String.fromCharCode(((l.charCodeAt(0) + n - 65) % 26) + 65))
      .replace(/\d/g, (d) => 9 - d)
      .split("")
      .map((l, i) => (i % 2 == 0 ? l.toUpperCase() : l.toLowerCase()))
      .reverse()
      .join("");
}


const playPass = (s, n) =>
   [
      ...s
         .replace(/[A-Z]/g, (val) => String.fromCharCode(((val.charCodeAt() - 65 + n) % 26) + 65))
         .replace(/\d/g, (val) => 9 - val),
   ]
      .map((val, idx) => (idx % 2 ? val.toLowerCase() : val))
      .reverse()
      .join(``);


function playPass(s, n) {
   let str = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz";
   return s
      .toLowerCase()
      .replace(/[a-z0-9]/g, function (a, i) {
         if (!isNaN(+a)) return 9 - a;
         else {
            a = str[str.indexOf(a) + (n % 26)];
            if (i % 2 === 0) a = a.toUpperCase();
            return a;
         }
      })
      .split("")
      .reverse()
      .join("");
}


console.log(playPass("I LOVE YOU!!!", 1), "!!!vPz fWpM J");
console.log(
   playPass("MY GRANMA CAME FROM NY ON THE 23RD OF APRIL 2015", 2),
   "4897 NkTrC Hq fT67 GjV Pq aP OqTh gOcE CoPcTi aO"
);