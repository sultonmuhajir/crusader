/*
|--------------------------------------------------------------------------
| Is a number prime?
|--------------------------------------------------------------------------
|
*/

function isPrime(num) {
   for (let i = 2, s = Math.sqrt(num); i <= s; i++)
      if (num % i === 0) return false;
   return num > 1;
}


function isPrime(num) {
   for (let i = 2; i <= num ** .5; i++) {
      if (!(num % i)) return false;
   }
   return num > 1;
}


function isPrime(num) {
   let even = 2;
   while ((even * even <= num) && (num % even != 0)) {
      even++;
   }
   return even * even > num && num > 1
}


function isPrime(num) {
   for (let i = 2; i <= num / (i - 1); i++) {
      if (num !== i && num % i === 0) return false;
   }
   return (num > 1)
}


console.log(isPrime(0), false, "0 is not prime");
console.log(isPrime(1), false, "1 is not prime");
console.log(isPrime(2), true, "2 is prime");
console.log(isPrime(73), true, "73 is prime");
console.log(isPrime(75), false, "75 is not prime");
console.log(isPrime(-1), false, "-1 is not prime");