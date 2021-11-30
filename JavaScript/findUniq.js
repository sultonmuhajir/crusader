/*
|--------------------------------------------------------------------------
| Find the unique number
|--------------------------------------------------------------------------
|
*/

function findUniq(arr) {
   const unq = [...new Set(arr)];
   return arr.filter(i => i == unq[0]).length == 1 ? unq[0] : unq[1];
}


const findUniq = arr => arr.filter(a => a !== arr[+(arr[1] === arr[2])])[0]


function findUniq(arr) {
   arr.sort((a, b) => a - b);
   return arr[0] == arr[1] ? arr.pop() : arr[0]
}


function findUniq(arr) {
   return arr.find(n => arr.indexOf(n) === arr.lastIndexOf(n));
}


function findUniq(arr) {
   let aux = (arr[0] != arr[1]) ? arr[3] : arr[0];
   return arr.filter(x => x != aux)[0];
}


console.log(findUniq([1, 0, 0]), 1);
console.log(findUniq([0, 1, 0]), 1);
console.log(findUniq([0, 0, 1]), 1);
console.log(findUniq([1, 1, 1, 2, 1, 1]), 2);
console.log(findUniq([1, 1, 2, 1, 1]), 2);
console.log(findUniq([3, 10, 3, 3, 3]), 10);