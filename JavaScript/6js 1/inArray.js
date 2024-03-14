/*
|--------------------------------------------------------------------------
| Which are in?
|--------------------------------------------------------------------------
|
*/

function inArray(array1, array2) {
   let res = [];
   for (let a1 of array1) {
      for (let a2 of array2) {
         if (a2.includes(a1)) {
            res.push(a1);
            break;
         }
      }
   }
   return res.sort();
}


function inArray(array1, array2) {
   return array1.filter((e) => array2.join(" ").includes(e)).sort();
}


function inArray(array1, array2) {
   return array1.filter((a1) => array2.find((a2) => a2.match(a1))).sort();
}


console.log(inArray(["arp", "live", "strong"], ["lively", "alive", "harp", "sharp", "armstrong"]), ['arp', 'live', 'strong']);