function solution(number) {
   const arr = [];
   let three = 3;
   let five = 5;
   while (three < number) {
      arr.push(three);
      three += 3;
   }
   while (five < number) {
      arr.push(five);
      five += 5;
   }
   return [...new Set(arr)].reduce((acc, curr) => acc + curr, 0);
}


function solution(number) {
   let sum = 0;
   for (let i = 1; i < number; i++) {
      if (i % 3 == 0 || i % 5 == 0) {
         sum += i
      }
   }
   return sum;
}


const solution = n => {
   let s = 0;
   for (let i = 0; i < n; i++) s += i % 3 ? i % 5 ? 0 : i : i;
   return s;
}


console.log(solution(10), 23);
