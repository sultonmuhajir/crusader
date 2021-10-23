/*
|--------------------------------------------------------------------------
| World Bits War
|--------------------------------------------------------------------------
|
*/

function bitsWar(numbers) {
   let pOdd = numbers.filter(i => i % 2 != 0 && i > 0).map(j => j.toString(2)).join('').split('').filter(i => i == '1').length;
   let mOdd = numbers.filter(i => i % 2 != 0 && i < 0).map(j => j.toString(2)).join('').split('').filter(i => i == '1').length;
   let pEven = numbers.filter(i => i % 2 == 0 && i > 0).map(j => j.toString(2)).join('').split('').filter(i => i == '1').length;
   let mEven = numbers.filter(i => i % 2 == 0 && i < 0).map(j => j.toString(2)).join('').split('').filter(i => i == '1').length;
   const odd = pOdd - mOdd;
   const even = pEven - mEven;
   return odd > even ? 'odds win' : odd < even ? 'evens win' : 'tie';
}


function bitsWar(num) {
   let [odd, even] = [num.filter(i => i & 1), num.filter(i => !(i & 1))]
   .map(i => i.map(i => i.toString `2`.replace(/0/g, '')
      .replace(/1+/g, i => i.length)).reduce((sum, i) => sum + +i, 0))
   return odd == even ? 'tie' : `${odd > even ? 'odds' : 'evens'} win`
}


function bitsWar(numbers) {
   let hbc = n => [...n.toString(2)].filter(c => c == '1').length;
   let m = 0;
   for (let n of numbers) {
      if (n == 0) continue;
      if (n > 0 ^ n % 2 != 0) m -= hbc(n);
      else m += hbc(n);
   }
   return m == 0 ? "tie" : m > 0 ? "odds win" : "evens win";
}


function bitsWar(numbers) {
   let r = numbers.reduce((a, v) => {
      return a += Math.sign(v) * (v.toString(2).split('1').length - 1) * (v % 2 ? 1 : -1), a
   }, 0)
   return r > 0 ? "odds win" : r < 0 ? "evens win" : "tie"
}


console.log(bitsWar([1, 5, 12]), "odds win");
console.log(bitsWar([7, -3, 20]), "evens win");
console.log(bitsWar([7, -3, -2, 6]), "tie");
console.log(bitsWar([-3, -5]), "evens win");
console.log(bitsWar([]), "tie");