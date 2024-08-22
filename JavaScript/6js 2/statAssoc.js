/*
|--------------------------------------------------------------------------
| Statistics for an Athletic Association
|--------------------------------------------------------------------------
|
*/

function toHMS(sec) {
   let h = String(Math.floor(sec / 3600)).padStart(2, "0");
   sec %= 3600;
   let m = String(Math.floor(sec / 60)).padStart(2, "0");
   let s = String(sec % 60).padStart(2, "0");
   return `${h}|${m}|${s}`;
}
function stat(strg) {
   if (strg === "") return "";
   let times = strg.split(", ").map((t) => {
      let [h, m, s] = t.split("|").map(Number);
      return h * 3600 + m * 60 + s;
   });
   times.sort((a, b) => a - b);
   let range = times[times.length - 1] - times[0];
   let avg = Math.floor(times.reduce((a, b) => a + b) / times.length);
   let med =
      times.length % 2 === 0
         ? Math.floor((times[times.length / 2 - 1] + times[times.length / 2]) / 2)
         : times[Math.floor(times.length / 2)];
   return `Range: ${toHMS(range)} Average: ${toHMS(avg)} Median: ${toHMS(med)}`;
}


function stat(a) {
   const toFormat = (a) =>
      [(a / 3600) | 0, (a / 60) % 60 | 0, a % 60 | 0].map((a) => ("0" + a).slice(-2)).join`|`;
   const reduce = (a) => a.reduce((a, b) => a + b, 0) / a.length;
   const arr = a.split`, `
      .map((a) => a.split`|`.reduce((a, b) => +b + a * 60, 0))
      .sort((a, b) => a - b);
   const m = arr.slice(Math.ceil(arr.length / 2) - 1, Math.floor(arr.length / 2) + 1);
   const [range, average, median] = [
      Math.max(...arr) - Math.min(...arr),
      reduce(arr),
      reduce(m),
   ].map((a) => toFormat(a));
   return a ? `Range: ${range} Average: ${average} Median: ${median}` : "";
}


console.log(
   stat("01|15|59, 1|47|16, 01|17|20, 1|32|34, 2|17|17"),
   "Range: 01|01|18 Average: 01|38|05 Median: 01|32|34"
);
console.log(
   stat("02|15|59, 2|47|16, 02|17|20, 2|32|34, 2|17|17, 2|22|00, 2|31|41"),
   "Range: 00|31|17 Average: 02|26|18 Median: 02|22|00"
);