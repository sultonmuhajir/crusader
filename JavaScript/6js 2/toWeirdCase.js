/*
|--------------------------------------------------------------------------
| WeIrD StRiNg CaSe
|--------------------------------------------------------------------------
|
*/

function toWeirdCase(string) {
   return string
      .split(" ")
      .map((word) => {
         return word
            .split("")
            .map((char, i) => {
               return i % 2 === 0 ? char.toUpperCase() : char.toLowerCase();
            })
            .join("");
      })
      .join(" ");
}


function toWeirdCase(string) {
   return string.replace(/\w(.?)/g, (a, b) => a[0].toUpperCase() + b);
}


function toWeirdCase(string) {
   let result = "";
   let isEven = true;
   for (let i = 0; i < string.length; i++) {
      let char = string[i];
      if (char !== " ") {
         result += isEven ? char.toUpperCase() : char.toLowerCase();
         isEven = !isEven;
      } else {
         result += " ";
         isEven = true;
      }
   }
   return result;
}


console.log(toWeirdCase("This"), "ThIs");
console.log(toWeirdCase("is"), "Is");
console.log(toWeirdCase("This is a test"), "ThIs Is A TeSt");