/*
|--------------------------------------------------------------------------
| Backwards Read Primes
|--------------------------------------------------------------------------
|
*/

function backwardsPrime(start, stop) {
   const isPrime = (num) => {
      if (num < 2) return false;
      for (let i = 2, sqrt = Math.sqrt(num); i <= sqrt; i++) {
         if (num % i === 0) return false;
      }
      return true;
   };
   const reverseNumber = (num) => parseInt(num.toString().split("").reverse().join(""), 10);
   return Array.from({ length: stop - start + 1 }, (_, i) => start + i).filter(
      (num) => isPrime(num) && isPrime(reverseNumber(num)) && num !== reverseNumber(num)
   );
}


function backwardsPrime(start, stop) {
   const pri = (num) => {
      for (let i = 2; i <= num ** 0.5; i++) {
         if (!(num % i)) return false;
      }
      return num > 1;
   };
   const rev = (num) => +[...`${num}`].reverse().join(``);
   return [...Array(++stop - start)]
      .map((_, idx) => start + idx)
      .filter((val) => val !== rev(val) && pri(val) && pri(rev(val)));
}


function backwardsPrime(start, stop) {
   let res = [];
   function isPrime(num) {
      for (let i = 2; i <= Math.sqrt(num); i++) {
         if (num % i === 0) return false;
      }
      return true;
   }
   for (let i = start; i <= stop; i++) {
      if (i % 2 === 0) continue;
      let rev = i.toString().split("").reverse().join("");
      if (i !== Number(rev) && isPrime(i) && isPrime(Number(rev))) {
         res.push(i);
      }
   }
   return res;
}


console.log(backwardsPrime(9900, 10000), [9923, 9931, 9941, 9967]);