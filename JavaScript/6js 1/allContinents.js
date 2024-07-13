/*
|--------------------------------------------------------------------------
| Coding Meetup #8 - Higher-Order Functions Series - Will all continents be represented?
|--------------------------------------------------------------------------
|
*/

function allContinents(list) {
   const arr = ["Africa", "Americas", "Asia", "Europe", "Oceania"];
   const res = new Set();
   for (const dev of list) {
      res.add(dev.continent);
   }
   return arr.every((continent) => res.has(continent));
}


const allContinents = (arr) => new Set(arr.map((dev) => dev.continent)).size === 5;


function allContinents(list) {
   return ["Africa", "Americas", "Asia", "Europe", "Oceania"].every((x) =>
      list.some((y) => x == y.continent)
   );
}


let list2 = [
   {
      firstName: "Fatima",
      lastName: "A.",
      country: "Algeria",
      continent: "Africa",
      age: 25,
      language: "JavaScript",
   },
];
console.log(allContinents(list2), false);