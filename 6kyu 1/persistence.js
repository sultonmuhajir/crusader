// Persistent Bugger.


function persistence(num) {
   let count = 0;
   while (num >= 10) {
      const arr = [];
      const str = num.toString();
      for (let i in str) {
         arr.push(Number(str[i]));
      }
      num = arr.reduce((acc, curr) => acc * curr);
      count++;
   }
   return count;
}


const persistence = (n, c) => n > 9 ? persistence(n.toString().split('').reduce((x, y) => x * y), c ? (c + 1) : 1) : c ? c : 0;


function persistence(n, s = `${n}`, c = 0) {
   while (s.length > 1) n = s.split('').reduce((t, a) => +t * +a), s = `${n}`, c++;
   return c;
}


const persistence = num => {
   return num > 9 ? persistence([...`${num}`].reduce((a, b) => a * +b)) + 1 : 0;
}


console.log(persistence(39), 3);
console.log(persistence(4), 0);
console.log(persistence(25), 2);
console.log(persistence(999), 4);