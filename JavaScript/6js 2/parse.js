/*
|--------------------------------------------------------------------------
| Make the Deadfish Swim
|--------------------------------------------------------------------------
|
*/

function parse(data) {
   let res = [];
   let val = 0;
   for (let char of data) {
      if (char === "i") val++;
      else if (char === "d") val--;
      else if (char === "s") val *= val;
      else if (char === "o") res.push(val);
   }
   return res;
}


function parse(data) {
   let value = 0;
   const result = [];
   for (let i = 0; i < data.length; i++) {
      switch (data[i]) {
         case "i":
            value++;
            break;
         case "d":
            value--;
            break;
         case "s":
            value *= value;
            break;
         case "o":
            result.push(value);
            break;
         default:
            break;
      }
   }
   return result;
}


function parse(data) {
   let res = [];
   data.split("").reduce((cur, s) => {
      if (s === "i") cur++;
      if (s === "d") cur--;
      if (s === "s") cur = Math.pow(cur, 2);
      if (s === "o") res.push(cur);
      return cur;
   }, 0);
   return res;
}


console.log(parse("iiisdoso"), [8, 64]);
console.log(parse("iiisxxxdoso"), [8, 64]);