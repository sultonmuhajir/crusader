/*
|--------------------------------------------------------------------------
| Reverse every other word in the string
|--------------------------------------------------------------------------
|
*/

function reverse(str) {
   let res = [];
   const arr = str.split(' ');
   for (let i = 0; i < arr.length; i++) {
      if (i % 2 != 0) {
         res.push(arr[i].split('').reverse().join(''))
      } else {
         res.push(arr[i])
      }
   }
   return res.filter(i => i != '').join(' ');
}


function reverse(str) {
   let arr = str.split(" ");
   for (let i = 1; i < arr.length; i += 2) {
      arr[i] = arr[i].split('').reverse().join("");
   }
   return arr.join(" ").trim();
}


function reverse(string) {
   return string
      .split ` `
      .map((w, i) => i & 1 ? [...w].reverse().join `` : w)
      .join ` `
      .trim();
}


function reverse(str) {
   return str.split(` `).map((it, index) => {
      return index % 2 !== 0 ? it.split(``).reverse().join(``) : it
   }).join(` `).trim();
}


console.log(reverse("Reverse this string, please!"), "Reverse siht string, !esaelp")
console.log(reverse("I really don't like reversing strings!"), "I yllaer don't ekil reversing !sgnirts")
console.log(reverse("   "))