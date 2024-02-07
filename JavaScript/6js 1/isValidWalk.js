/*
|--------------------------------------------------------------------------
| Take a Ten Minutes Walk
|--------------------------------------------------------------------------
|
*/

function isValidWalk(walk) {
   if (walk.length !== 10) return false;
   const x = { n: 0, s: 0, e: 0, w: 0 };
   for (let i of walk) {
      x[i]++;
   }
   return x["n"] === x["s"] && x["e"] === x["w"];
}


function isValidWalk(walk) {
   let dx = 0;
   let dy = 0;
   let dt = walk.length;
   for (let i = 0; i < walk.length; i++) {
      switch (walk[i]) {
         case "n":
            dy--;
            break;
         case "s":
            dy++;
            break;
         case "w":
            dx--;
            break;
         case "e":
            dx++;
            break;
      }
   }
   return dt === 10 && dx === 0 && dy === 0;
}


function isValidWalk(walk) {
   function count(val) {
      return walk.filter(function (a) {
         return a == val;
      }).length;
   }
   return walk.length == 10 && count("n") == count("s") && count("w") == count("e");
}


console.log(
   isValidWalk(["w", "e", "w", "e", "w", "e", "w", "e", "w", "e", "w", "e"]),
   "should return false"
);
console.log(isValidWalk(["w"]), "should return false");
console.log(isValidWalk(["n", "n", "n", "s", "n", "s", "n", "s", "n", "s"]), "should return false");