/*
|--------------------------------------------------------------------------
| Tortoise racing
|--------------------------------------------------------------------------
|
*/

function race(v1, v2, g) {
   if (v1 >= v2) return null;
   const timeInSeconds = Math.floor((g * 3600) / (v2 - v1));
   const hours = Math.floor(timeInSeconds / 3600);
   const minutes = Math.floor((timeInSeconds % 3600) / 60);
   const seconds = Math.floor(timeInSeconds % 60);
   return [hours, minutes, seconds];
}


const race = (v1, v2, g) => (
   (t = g / (v2 - v1)), t < 0 ? null : [t, (t * 60) % 60, (t * 3600) % 60].map(Math.floor)
);


function race(v1, v2, g) {
   return v2 >= v1
      ? [~~(g / (v2 - v1)), ~~((g / (v2 - v1)) * 60) % 60, ~~((g / (v2 - v1)) * 60 ** 2) % 60]
      : null;
}


console.log(race(720, 850, 70), [0, 32, 18]);
console.log(race(80, 91, 37), [3, 21, 49]);
console.log(race(80, 100, 40), [2, 0, 0]);
console.log(race(720, 850, 37), [0, 17, 4]);