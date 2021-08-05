// Sum of Digits / Digital Root


function digital_root(n) {
   while (n >= 10) {
      const arr = [];
      const str = n.toString();
      for (let i in str) {
         arr.push(Number(str[i]));
      }
      n = (arr.reduce((a, b) => a + b));
   }
   return n;
}


function digital_root(n) {
   return (n - 1) % 9 + 1;
}


function digital_root(n) {
   n = eval(n.toString().split('').join('+'));
   if (n > 9) {
      return digital_root(n);
   }
   return n;
}


function digital_root(n) {
   if (n < 10)
      return n;
   for (var sum = 0, i = 0, n = String(n); i < n.length; i++)
      sum += Number(n[i]);
   return digital_root(sum);
}


console.log(digital_root(16), 7)
console.log(digital_root(456), 6)
console.log(digital_root(5104), 1)