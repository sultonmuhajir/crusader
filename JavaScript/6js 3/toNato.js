/*
|--------------------------------------------------------------------------
| If you can read this...
|--------------------------------------------------------------------------
|
*/

function toNato(words) {
   const NATO = {
      A: "Alfa",
      B: "Bravo",
      C: "Charlie",
      D: "Delta",
      E: "Echo",
      F: "Foxtrot",
      G: "Golf",
      H: "Hotel",
      I: "India",
      J: "Juliett",
      K: "Kilo",
      L: "Lima",
      M: "Mike",
      N: "November",
      O: "Oscar",
      P: "Papa",
      Q: "Quebec",
      R: "Romeo",
      S: "Sierra",
      T: "Tango",
      U: "Uniform",
      V: "Victor",
      W: "Whiskey",
      X: "Xray",
      Y: "Yankee",
      Z: "Zulu",
   };
   let res = [];
   for (let char of words) {
      if (char.match(/[a-zA-Z]/)) {
         res.push(NATO[char.toUpperCase()]);
      } else if (char.match(/[.,!?]/)) {
         res.push(char);
      }
   }
   return res.join(" ");
}


const toNato = (w) => w.replace(/\w ?/g, (m) => `${NATO[m[0].toUpperCase()]} ` || m).trim();


function to_nato(words) {
   return words
      .split("")
      .filter((c) => c !== " ")
      .map((c) => table[c.toUpperCase()] || c)
      .join(" ");
}


console.log(
   toNato("If, you can read?"),
   "India Foxtrot , Yankee Oscar Uniform Charlie Alfa November Romeo Echo Alfa Delta ?"
);