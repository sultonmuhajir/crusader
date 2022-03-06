/*
|--------------------------------------------------------------------------
| New Cashier Does Not Know About Space or Shift
|--------------------------------------------------------------------------
|
*/

function getOrder(input) {
   let res = [];
   let arr = ['Burger', 'Fries', 'Chicken', 'Pizza', 'Sandwich', 'Onionrings', 'Milkshake', 'Coke'];
   arr.forEach(i => {
      let temp = input.split(i.toLowerCase()).length;
      for (let j = 0; j < temp - 1; j++) {
         res.push(i);
      }
   });
   return res.join(' ');
}


function getOrder(input) {
   const m = "burger|fries|chicken|pizza|sandwich|onionrings|milkshake|coke"
   return input.match(RegExp(m, 'g')).sort((a, b) => m.indexOf(a) - m.indexOf(b)).map(e => e[0].toUpperCase() + e.slice(1)).join ` `;
}


function getOrder(input) {
   let menu = ['Burger', 'Fries', 'Chicken', 'Pizza', 'Sandwich', 'Onionrings', 'Milkshake', 'Coke'];
   let result = '';
   menu.forEach(item => {
      result += (item + ' ').repeat((input.match(new RegExp(item, 'gi')) || []).length);
   });
   return result.trim();
}


function getOrder(input) {
   return [`burger`, `fries`, `chicken`, `pizza`, `sandwich`, `onionrings`, `milkshake`, `coke`]
      .reduce((pre, val) => [...pre, ...input.match(new RegExp(val, `g`)) || []], [])
      .map(val => val[0].toUpperCase() + val.slice(1)).join(` `);
}


console.log(getOrder("milkshakepizzachickenfriescokeburgerpizzasandwichmilkshakepizza"),
   "Burger Fries Chicken Pizza Pizza Pizza Sandwich Milkshake Milkshake Coke");
console.log(getOrder("pizzachickenfriesburgercokemilkshakefriessandwich"),
   "Burger Fries Fries Chicken Pizza Sandwich Milkshake Coke");