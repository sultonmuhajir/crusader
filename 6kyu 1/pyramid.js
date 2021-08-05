// Pyramid Array


function pyramid(n) {
   let res = [];
   for (let i = 0; i < n; i++) {
      let temp = [];
      for (let j = 0; j <= i; j++) {
         temp.push(1)
      }
      res.push(temp)
   }
   return res;
}


const pyramid = n => n <= 0 ? [] : pyramid(n - 1).concat([new Array(n).fill(1)])


function pyramid(n) {
   const res = [];
   for (let i = 0; i < n; i++) {
      res.push([...Array(i + 1)].fill(1))
   }
   return res;
}


function pyramid(n) {
   return Array(n).fill().map((e, i) => Array(i + 1).fill(1))
}


console.log(pyramid(0), []);
console.log(pyramid(2), [
   [1],
   [1, 1]
]);