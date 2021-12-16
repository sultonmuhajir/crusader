/*
|--------------------------------------------------------------------------
| Exclamation marks series #17: Put the exclamation marks and question marks on the balance - are they balanced?
|--------------------------------------------------------------------------
|
*/

function balance(left, right) {
   let res = 0;
   for (let i = 0; i < left.length; i++) {
      res += left[i] == '!' ? 2 : 3;
   }
   for (let j = 0; j < right.length; j++) {
      res -= right[j] == '!' ? 2 : 3;
   }
   return res < 0 ? "Right" : res > 0 ? "Left" : "Balance";
}


function balance(left, right) {
   l = [...left].reduce((s, a) => s + (a == '?' ? 3 : 2), 0);
   r = [...right].reduce((s, a) => s + (a == '?' ? 3 : 2), 0);
   return l == r ? "Balance" : l > r ? "Left" : "Right"
}


function balance(left, right) {
   const weight = s => [...s].map(c => c === '!' ? 2 : c === '?' ? 3 : 0).reduce((s, x) => s + x, 0);
   let diff = weight(left) - weight(right);
   return diff === 0 ? 'Balance' : diff > 0 ? 'Left' : 'Right';
}


function balance(left, right) {
   let [a, b] = [left, right].map(s => s.split('').reduce((t, c) => t += c === '!' ? 2 : 3, 0));
   return a == b ? 'Balance' : a > b ? 'Left' : 'Right';
}


console.log(balance("!!", "??"), "Right");
console.log(balance("!??", "?!!"), "Left");
console.log(balance("!?!!", "?!?"), "Left");
console.log(balance("!!???!????", "??!!?!!!!!!!"), "Balance");