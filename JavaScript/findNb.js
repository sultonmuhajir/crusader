/*
|--------------------------------------------------------------------------
| Build a pile of Cubes
|--------------------------------------------------------------------------
|
*/

function findNb(m) {
   let x = 1
   let res = 1
   while (m - (x ** 3) != 0) {
      m = m - (x ** 3)
      if (m < 0) {
         return -1
      } else {
         res += 1
         x += 1
      }
   }
   return res
}


function findNb(m) {
   let n = 0;
   while (m > 0) m -= Math.pow(++n, 3);
   return m ? -1 : n;
}


function findNb(m) {
   let n = 0;
   let sum = 0;
   while (sum < m) {
      n++;
      sum += Math.pow(n, 3);
   }
   return sum === m ? n : -1;
}


function findNb(m) {
   for (let i = 1, sum = 0; sum < m; sum += i * i * i, i++);
   return sum == m ? (i - 1) : -1;
}


function findNb(m) {
   let n = Math.floor(Math.pow(4 * m, 1 / 4));
   if (n * n * (n + 1) * (n + 1) / 4 != m)
      return -1;
   return n;
}


console.log(findNb(226));
console.log(findNb(4183059834009), 2022)
console.log(findNb(24723578342962), -1)
console.log(findNb(135440716410000), 4824)
console.log(findNb(40539911473216), 3568)