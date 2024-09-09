/*
|--------------------------------------------------------------------------
| String average
|--------------------------------------------------------------------------
|
*/

function averageString(str) {
   const numMap = {
      zero: 0,
      one: 1,
      two: 2,
      three: 3,
      four: 4,
      five: 5,
      six: 6,
      seven: 7,
      eight: 8,
      nine: 9,
   };
   const nums = str.split(" ").map((word) => numMap[word]);
   if (nums.includes(undefined) || !str) return "n/a";
   const avg = Math.floor(nums.reduce((sum, num) => sum + num, 0) / nums.length);
   return Object.keys(numMap).find((key) => numMap[key] === avg) || "n/a";
}


const averageString = (str) =>
   ((q) =>
      q[
         Math.floor(
            str
               .split(" ")
               .map((x) => (q.includes(x) ? q.indexOf(x) : NaN))
               .reduce((a, b) => a + b) / str.split(" ").length
         )
      ] || "n/a")(["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"]);


function averageString(str) {
   let obj = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
   return (
      obj[
         Math.floor(
            str
               .split(" ")
               .map((x) => (obj.includes(x) ? obj.indexOf(x) : NaN))
               .reduce((a, b) => a + b) / str.split(" ").length
         )
      ] || "n/a"
   );
}


console.log(averageString("zero nine five two"), "four");
console.log(averageString("four six two three"), "three");
console.log(averageString("one two three four five"), "three");
console.log(averageString("five four"), "four");
console.log(averageString("zero zero zero zero zero"), "zero");
console.log(averageString("one one eight one"), "two");
console.log(averageString(""), "n/a");