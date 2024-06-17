/*
|--------------------------------------------------------------------------
| The Deaf Rats of Hamelin
|--------------------------------------------------------------------------
|
*/

function countDeafRats(town) {
   town = town.replace(/\s/g, "");
   const pI = town.indexOf("P");
   function countDeaf(rats, correctDirection) {
      let count = 0;
      for (let i = 0; i < rats.length; i += 2) {
         const rat = rats.slice(i, i + 2);
         if (rat !== correctDirection) count++;
      }
      return count;
   }
   return countDeaf(town.slice(0, pI), "~O") + countDeaf(town.slice(pI + 1), "O~");
}


function countDeafRats(town) {
   return [...town.replace(/\s/g, ``)].filter((val, idx) => --idx % 2 && val === `O`).length;
}


function countDeafRats(town) {
   town = town.replace(/\s/g, "");
   let count = 0;
   for (let i = 0; i < town.length; i += 2) {
      if (town[i] === "O") count++;
   }
   return count;
}


console.log(countDeafRats("~O~O~O~O P"), 0);
console.log(countDeafRats("P O~ O~ ~O O~"), 1);
console.log(countDeafRats("~O~O~O~OP~O~OO~"), 2);