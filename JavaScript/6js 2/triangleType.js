/*
|--------------------------------------------------------------------------
| Triangle type
|--------------------------------------------------------------------------
|
*/

function triangleType(a, b, c) {
   let sides = [a, b, c].sort((x, y) => x - y);
   a = sides[0];
   b = sides[1];
   c = sides[2];
   if (a + b <= c) return 0;
   if (a * a + b * b === c * c) return 2;
   if (a * a + b * b < c * c) return 3;
   return 1;
}


const triangleType = (a, b, c) => (
   ([a, b, c] = [a, b, c].sort((a, b) => a - b)),
   a + b <= c ? 0 : a ** 2 + b ** 2 > c ** 2 ? 1 : a ** 2 + b ** 2 < c ** 2 ? 3 : 2
);


function triangleType(a, b, c) {
   let max = Math.max(a, b, c);
   if (a + b + c <= 2 * max) return 0;
   if (2 * max * max == a * a + b * b + c * c) return 2;
   if (2 * max * max > a * a + b * b + c * c) return 3;
   return 1;
}


console.log(triangleType(2, 4, 6), 0);
console.log(triangleType(8, 5, 7), 1);
console.log(triangleType(3, 4, 5), 2);
console.log(triangleType(7, 12, 8), 3);