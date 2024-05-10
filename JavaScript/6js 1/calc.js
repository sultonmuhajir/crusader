/*
|--------------------------------------------------------------------------
| Reverse polish notation calculator
|--------------------------------------------------------------------------
|
*/

function calc(expr) {
   if (!expr || expr.trim() === "") return 0;
   const stack = [];
   const tokens = expr.trim().split(" ");
   for (let token of tokens) {
      if (!isNaN(token)) {
         stack.push(parseFloat(token));
      } else {
         const b = stack.pop();
         const a = stack.pop();
         switch (token) {
            case "+": stack.push(a + b); break;
            case "-": stack.push(a - b); break;
            case "*": stack.push(a * b); break;
            case "/": stack.push(a / b); break;
         }
      }
   }
   return stack.pop();
}


function calc(s) {
   var r = /(-?[\d\.]+) (-?[\d\.]+) ([-+\*\/])/;
   while (s != "" && r.test(s)) s = s.replace(r, (_, a, b, op) => eval(a + op + b));
   return +s.match(/-?[\d\.]+$/);
}


function calc(expr) {
   return expr
      .split(" ")
      .reduce(
         function (a, b) {
            return a.concat(
               b.match(/[0-9]/) ? parseFloat(b) : eval(a.splice(a.length - 2).join(b))
            );
         },
         [0]
      )
      .pop();
}


console.log(calc(""), 0);
console.log(calc("3"), 3);
console.log(calc("3.5"), 3.5);
console.log(calc("1 3 +"), 4);
console.log(calc("1 3 *"), 3);
console.log(calc("1 3 -"), -2);
console.log(calc("4 2 /"), 2);