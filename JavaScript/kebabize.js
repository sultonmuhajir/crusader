/*
|--------------------------------------------------------------------------
| Kebabize
|--------------------------------------------------------------------------
|
*/

function kebabize(str) {
   res = '';
   for (let i = 0; i < str.length; i++) {
      res += str[i] != str[i].toUpperCase() ? str[i] : str[i].match('^[0-9]') ? '' : `-${str[i].toLowerCase()}`
   }
   return res.split('-').filter(i => i != '').join('-');
}


function kebabize(str) {
   return str.replace(/[0-9]/g, '').replace(/\B[A-Z]/g, (x) => '-' + x).toLowerCase();
}


function kebabize(str) {
   let nonumber = str.replace(/\d/g, '').split(/(?=[A-Z])/g);
   return nonumber.join('-').toLowerCase();
}


function kebabize(str) {
   return str.replace(/([A-Z])/g, "-$1").replace(/[0-9]/g, '').toLowerCase().replace(/^-/, '');
}


console.log(kebabize('myCamelCasedString'), 'my-camel-cased-string');
console.log(kebabize('myCamelHas3Humps'), 'my-camel-has-humps');
console.log(kebabize('Cora'), 'cora');