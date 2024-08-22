/*
|--------------------------------------------------------------------------
| A Rule of Divisibility by 13
|--------------------------------------------------------------------------
|
*/

function thirt(n) {
   const arr = [1, 10, 9, 12, 3, 4];
   let res = n;
   let prev = 0;
   while (res !== prev) {
      prev = res;
      res = String(res)
         .split("")
         .reverse()
         .map((x, i) => x * arr[i % arr.length])
         .reduce((a, b) => a + b, 0);
   }
   return res;
}


function thirt(n) {
   const newNum = n
      .toString()
      .split("")
      .reverse()
      .reduce((acc, c, i) => acc + c * (10 ** i % 13), 0);
   return n === newNum ? newNum : thirt(newNum);
}


function thirt(n) {
   const nums = [1, 10, 9, 12, 3, 4];
   let sum = ("" + n)
      .split("")
      .reverse()
      .reduce((sum, v, i) => sum + v * nums[i % nums.length], 0);
   return sum === n ? n : thirt(sum);
}


console.log(thirt(8529), 79);
console.log(thirt(85299258), 31);
console.log(thirt(5634), 57);
console.log(thirt(1111111111), 71);
console.log(thirt(987654321), 30);