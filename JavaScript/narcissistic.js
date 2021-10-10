/*
|--------------------------------------------------------------------------
| Does my number look big in this?
|--------------------------------------------------------------------------
|
*/

function narcissistic(value) {
   let len = String(value);
   let res = 0;
   for (let i = 0; i < len.length; i++) {
      res += Number(len[i]) ** len.length;
   }
   return res === value;
}


function narcissistic(value) {
   return ('' + value).split('').reduce(function (p, c) {
      return p + Math.pow(c, ('' + value).length)
   }, 0) == value;
}


function narcissistic(value) {
   return value.toString()
      .split('')
      .map((x, i, arr) => x ** arr.length)
      .reduce((a, b) => +a + +b) === value
}


function narcissistic(value) {
   var power = ('' + value).length;
   return [...('' + value)].reduce((a, b) => a + Math.pow(b, power), 0) === value;
}


console.log(narcissistic(7), true, "7 is narcissistic");
console.log(narcissistic(371), true, "371 is narcissistic");