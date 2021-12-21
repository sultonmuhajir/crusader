/*
|--------------------------------------------------------------------------
| Dashatize it
|--------------------------------------------------------------------------
|
*/

function dashatize(num) {
   const n = String(Math.abs(num))
   let res = '';
   for (let i = 0; i < n.length; i++) {
      res += Number(n[i]) % 2 == 0 ? n[i] : `-${n[i]}-`;
   }
   const result = res.split('-').filter(i => i != '').join('-')
   return result == 'N-a-N' ? 'NaN' : result
}


function dashatize(num) {
   return isNaN(num) ? 'NaN' : num.toString().match(/([13579]|[02468]+)/g).join('-');
}


function dashatize(num) {
   return String(num)
      .replace(/([13579])/g, "-$1-")
      .replace(/--+/g, "-")
      .replace(/(^-|-$)/g, "")
}


function dashatize(num) {
   return num = num.toString().split("").map(function (c) {
      return c % 2 ? "-" + c + "-" : c;
   }).join("").split("-").filter(a => a != "").join("-");

}


console.log(dashatize(274), "2-7-4");
console.log(dashatize(5311), "5-3-1-1");
console.log(dashatize(86320), "86-3-20");
console.log(dashatize(974302), "9-7-4-3-02");
console.log(dashatize(NaN), "NaN");
console.log(dashatize(0), "0");
console.log(dashatize(-1), "1");
console.log(dashatize(-28369), "28-3-6-9");