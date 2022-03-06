/*
|--------------------------------------------------------------------------
| Count the smiley faces!
|--------------------------------------------------------------------------
|
*/

function countSmileys(arr) {
   let res = 0
   for (let i = 0; i < arr.length; i++) {
      let x = arr[i]
      if (x[0] == ':' || x[0] == ';') {
         if (x[x.length - 1] == ')' || x[x.length - 1] == 'D') {
            if (x.length == 3) {
               if (x[1] == '-' || x[1] == '~') {
                  res += 1
               }
            } else if (x.length == 2) {
               res += 1
            }
         }
      }
   }
   return res
}


function countSmileys(arr) {
   return arr.filter(x => /^[:;][-~]?[)D]$/.test(x)).length;
}


function countSmileys(arr) {
   let smileys = [":)", ";)", ":-)", ";-)", ";~)", ":~)", ":D", ";D", ":-D", ":~D", ";-D", ";~D"];
   let count = 0;
   for (let i = 0; i < arr.length; i++) {
      for (let j = 0; j < smileys.length; j++) {
         if (arr[i] === smileys[j]) {
            count++;
         }
      }
   }
   return count;
}


function countSmileys(arr) {
   return arr.reduce((n, s) => /^[:;][-~]?[)D]$/.test(s) ? n + 1 : n, 0)
}


console.log(countSmileys([]), 0);
console.log(countSmileys([':D', ':x)', ';~D', ':)']), 3);
console.log(countSmileys([':)', ':(', ':D', ':O', ':;']), 2);
console.log(countSmileys([';]', ':[', ';*', ':$', ';-D']), 1);