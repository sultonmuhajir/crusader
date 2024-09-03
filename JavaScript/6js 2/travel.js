/*
|--------------------------------------------------------------------------
| Salesman's Travel
|--------------------------------------------------------------------------
|
*/

function travel(r, zipcode) {
   let x = r.split(",").filter((i) => i.slice(i.indexOf(zipcode), i.length) === zipcode);
   let adr = x.map((i) => i.slice(i.indexOf(" ") + 1, i.length - 9)).join(",");
   let num = x.map((i) => i.slice(0, i.indexOf(" "))).join(",");
   return `${zipcode}:${adr}/${num}`;
}


function travel(r, zipcode) {
   re = RegExp("(\\d+)\\s+(.+)\\s+" + zipcode + "$");
   streets = r
      .split(",")
      .map((x) => x.match(re))
      .filter((x) => x);
   return zipcode + ":" + streets.map((x) => x[2]) + "/" + streets.map((x) => x[1]);
}


function travel(r, zipcode) {
   let matches = r.split(",").filter((str) => str.slice(-8) == zipcode);
   return (
      zipcode +
      ":" +
      matches.map((addr) => addr.split(" ").slice(1, -2).join(" ")).join(",") +
      "/" +
      matches.map((addr) => addr.split(" ")[0]).join(",")
   );
}
