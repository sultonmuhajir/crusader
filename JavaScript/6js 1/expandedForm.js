/*
|--------------------------------------------------------------------------
| Write Number in Expanded Form
|--------------------------------------------------------------------------
|
*/

function expandedForm(num) {
   let res = [];
   let x = num.toString();
   for (let i = 0; i < x.length; i++) {
      if (x[i] !== "0") res.push(x[i] + "0".repeat(x.length - i - 1));
   }
   return res.join(" + ");
}


function expandedForm(num) {
   return `${num}`
      .replace(/./g, (dgt, idx, str) => `${dgt * 10 ** (str.length - ++idx)} + `)
      .replace(/\D+(0|$)/g, "");
}


function expandedForm(num) {
   return String(num)
      .split("")
      .map((num, index, arr) => num + "0".repeat(arr.length - index - 1))
      .filter((num) => Number(num) != 0)
      .join(" + ");
}


console.log(expandedForm(12), "10 + 2");
console.log(expandedForm(42), "40 + 2");
console.log(expandedForm(70304), "70000 + 300 + 4");