/*
|--------------------------------------------------------------------------
| Rectangle into Squares
|--------------------------------------------------------------------------
|
*/

function sqInRect(lng, wdth) {
   if (lng === wdth) {
      return null;
   }
   let squares = [];
   while (lng !== 0 && wdth !== 0) {
      if (lng > wdth) {
         squares.push(wdth);
         lng -= wdth;
      } else {
         squares.push(lng);
         wdth -= lng;
      }
   }
   return squares;
}


function sqInRect(a, b, initial = true) {
   if (a === b) {
      return initial ? null : [a];
   }
   const min = Math.min(a, b);
   const max = Math.max(a, b);
   return [min, ...sqInRect(max - min, min, false)];
}


function sqInRect(width, height) {
   if (width === height) return null;
   if (width < height) [width, height] = [height, width];
   if (width === 2 * height) return [height, height];
   return [height, ...sqInRect(height, width - height)];
}


console.log(sqInRect(5, 5), null);
console.log(sqInRect(5, 3), [3, 2, 1, 1]);
console.log(sqInRect(3, 5), [3, 2, 1, 1]);
console.log(sqInRect(20, 14), [14, 6, 6, 2, 2, 2]);