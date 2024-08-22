/*
|--------------------------------------------------------------------------
| Convert string to camel case
|--------------------------------------------------------------------------
|
*/

function toCamelCase(str) {
   return str.replace(/[-_](.)/g, function (a, b) {
      return b.toUpperCase();
   });
}


function toCamelCase(str) {
   return str.replace(/[_-]\w/gi, (ch) => ch[1].toUpperCase());
}


function toCamelCase(str) {
   return str
      .split(/-|_/g)
      .map((w, i) => (i > 0 ? w.charAt(0).toUpperCase() : w.charAt(0)) + w.slice(1))
      .join("");
}


console.log(toCamelCase(""), "");
console.log(toCamelCase("the_stealth_warrior"), "theStealthWarrior");
console.log(toCamelCase("The-Stealth-Warrior"), "TheStealthWarrior");
console.log(toCamelCase("A-B-C"), "ABC");