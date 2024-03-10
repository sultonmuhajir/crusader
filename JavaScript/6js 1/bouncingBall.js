/*
|--------------------------------------------------------------------------
| Bouncing Balls
|--------------------------------------------------------------------------
|
*/

function bouncingBall(h, bounce, window) {
   if (h <= 0 || bounce <= 0 || bounce >= 1 || window >= h) return -1;
   let res = 1;
   while (h > window) {
      h *= bounce;
      if (h > window) res += 2;
   }
   return res;
}


const bouncingBall = (h, b, w) =>
   b >= 1 || h < w || b <= 0 ? -1 : Math.ceil(Math.log(w / h) / Math.log(b)) * 2 - 1;


function bouncingBall(h, bounce, window) {
   if (h <= 0 || bounce <= 0 || bounce >= 1 || window >= h) {
      return -1;
   }
   let newHeight = h * bounce;
   return bouncingBall(newHeight, bounce, window) + 2;
}


console.log(bouncingBall(3.0, 0.66, 1.5), 3);
console.log(bouncingBall(30.0, 0.66, 1.5), 15);
console.log(bouncingBall(3.0, 1.0, 1.5), -1);