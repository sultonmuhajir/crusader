/*
|--------------------------------------------------------------------------
| CamelCase Method
|--------------------------------------------------------------------------
|
*/

String.prototype.camelCase = function () {
   let res = []
   const x = this.toLowerCase().split(' ')
   for (let i = 0; i < x.length; i++) {
      if (x[i] != '') {
         res.push(`${x[i][0].toUpperCase()}${x[i].slice(1, x[i].length)}`)
      }
   }
   return res.join('')
}


String.prototype.camelCase = function () {
   return this.split(' ').map(function (word) {
      return word.charAt(0).toUpperCase() + word.slice(1);
   }).join('');
}


String.prototype.camelCase = function () {
   return this.trim().replace(/(?:^|\s+)(\w)/g, (_, c) => c.toUpperCase())
}


String.prototype.camelCase = function () {
   return this.split(/\s/)
      .map(str => str.charAt(0).toUpperCase() + str.slice(1))
      .join('');
}


console.log("test case".camelCase(), "TestCase");
console.log("camel case method".camelCase(), "CamelCaseMethod");
console.log("say hello ".camelCase(), "SayHello");
console.log(" camel case word".camelCase(), "CamelCaseWord");
console.log("".camelCase(), "");