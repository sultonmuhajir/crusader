/*
|--------------------------------------------------------------------------
| Pair of gloves
|--------------------------------------------------------------------------
|
*/

function numberOfPairs(gloves) {
   const colorCount = gloves.reduce((count, color) => {
      count[color] = (count[color] || 0) + 1;
      return count;
   }, {});
   return Object.values(colorCount).reduce((pairs, count) => pairs + Math.floor(count / 2), 0);
}


function numberOfPairs(gloves) {
   return [...new Set(gloves)].reduce(
      (acc, el) => acc + ~~(gloves.filter((x) => x === el).length / 2),
      0
   );
}


function numberOfPairs(gloves) {
   let counter = 0;
   let copyGloves = [...gloves].sort();
   for (let i = 0; i < copyGloves.length; i++) {
      if (copyGloves[i] === copyGloves[i + 1]) {
         counter++;
         copyGloves.splice(i, 2);
         i--;
      }
   }
   return counter;
}


console.log(numberOfPairs(["red", "green", "red", "blue", "blue"]), 2);
console.log(numberOfPairs(["red", "red", "red", "red", "red", "red"]), 3);