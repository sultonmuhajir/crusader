/*
|--------------------------------------------------------------------------
| Reverse or rotate?
|--------------------------------------------------------------------------
|
*/

function revrot(str, sz) {
   if (sz <= 0 || str === "" || sz > str.length) return "";
   let res = "";
   for (let i = 0; i < str.length; i += sz) {
      let chunk = str.slice(i, i + sz);
      if (chunk.length === sz) {
         let sum = chunk.split("").reduce((acc, curr) => acc + parseInt(curr), 0);
         res += sum % 2 === 0 ? chunk.split("").reverse().join("") : chunk.slice(1) + chunk[0];
      }
   }
   return res;
}


function revrot(str, sz) {
   return (str.match(new RegExp(`.{${sz}}`, `g`)) || [])
      .map((val) =>
         val.replace(/[02468]/g, ``).length % 2
            ? val.replace(/(.)(.+)/, `$2$1`)
            : [...val].reverse().join(``)
      )
      .join(``);
}


function revrot(str, sz) {
   if (sz <= 0 || str.length < sz) return "";
   const chunks = [];
   while (str.length >= sz) {
      chunks.push(str.slice(0, sz));
      str = str.slice(sz);
   }
   return chunks
      .map((item) => {
         const itemArr = item.split("");
         const kubs = itemArr.reduce((res, num) => res + Math.pow(num, 3), 0);
         return (kubs % 2 ? [...itemArr.slice(1), itemArr.shift()] : itemArr.reverse()).join("");
      })
      .join("");
}


console.log(revrot("1234", 0), "");
console.log(revrot("", 0), "");
console.log(revrot("1234", 5), "");
console.log(revrot("733049910872815764", 5), "330479108928157");