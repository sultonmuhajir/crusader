/*
|--------------------------------------------------------------------------
| Alphabet war - airstrike - letters massacre
|--------------------------------------------------------------------------
|
*/

function alphabetWar(fight) {
   const leftPower = { w: 4, p: 3, b: 2, s: 1 };
   const rightPower = { m: 4, q: 3, d: 2, z: 1 };
   let cleanFight = fight
      .split("")
      .map((char, i, arr) =>
         char === "*" ? "_" : arr[i - 1] === "*" || arr[i + 1] === "*" ? "_" : char
      );
   let leftScore = cleanFight.reduce((acc, char) => acc + (leftPower[char] || 0), 0);
   let rightScore = cleanFight.reduce((acc, char) => acc + (rightPower[char] || 0), 0);
   return leftScore > rightScore
      ? "Left side wins!"
      : rightScore > leftScore
      ? "Right side wins!"
      : "Let's fight again!";
}


function alphabetWar(s, a = "wpbs zdqm", o) {
   return (
      (o = [...s.replace(/\w?\*\w?/g, "")].reduce(
         (w, x) => w + (a.includes(x) ? a.indexOf(x) - 4 : 0),
         0
      )),
      o < 0 ? "Left side wins!" : o > 0 ? "Right side wins!" : "Let's fight again!"
   );
}


function alphabetWar(fight) {
   const map = { w: -4, p: -3, b: -2, s: -1, m: 4, q: 3, d: 2, z: 1 };
   let res = fight
      .replace(/[^*]?\*[^*]?/g, "")
      .split("")
      .reduce((a, b) => a + (map[b] || 0), 0);
   return res ? (res < 0 ? "Left" : "Right") + " side wins!" : "Let's fight again!";
}


console.log(alphabetWar("z"), "Right side wins!");
console.log(alphabetWar("****"), "Let's fight again!");
console.log(alphabetWar("z*dq*mw*pb*s"), "Let's fight again!");
console.log(alphabetWar("zdqmwpbs"), "Let's fight again!");
console.log(alphabetWar("zz*zzs"), "Right side wins!");
console.log(alphabetWar("sz**z**zs"), "Left side wins!");
console.log(alphabetWar("z*z*z*zs"), "Left side wins!");
console.log(alphabetWar("*wwwwww*z*"), "Left side wins!");