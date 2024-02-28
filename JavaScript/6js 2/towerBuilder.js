/*
|--------------------------------------------------------------------------
| Build Tower
|--------------------------------------------------------------------------
|
*/

function towerBuilder(nFloors) {
   let res = [];
   for (let i = 0; i < nFloors; i++) {
      let x = "*".repeat(2 * i + 1);
      let y = " ".repeat(nFloors - i - 1);
      res.push(y + x + y);
   }
   return res;
}


function towerBuilder(n) {
   return [...Array(nFloors)].map((_, idx) =>
      `${`*`.repeat(2 * idx + 1)}`.padStart(nFloors + idx, ` `).padEnd(2 * nFloors - 1, ` `)
   );
}


function towerBuilder(n) {
   return [...Array(n)].map(
      (_, i) => " ".repeat(n - 1 - i) + "*".repeat(i * 2 + 1) + " ".repeat(n - 1 - i)
   );
}


console.log(towerBuilder(1), ["*"]);
console.log(towerBuilder(2), [" * ", "***"]);
console.log(towerBuilder(3), ["  *  ", " *** ", "*****"]);