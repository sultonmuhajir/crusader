/*
|--------------------------------------------------------------------------
| Rainfall
|--------------------------------------------------------------------------
|
*/

function parseData(data) {
   return data.split("\n").reduce((acc, line) => {
      let [city, records] = line.split(":");
      acc[city.trim()] = records
         .split(",")
         .map((record) => parseFloat(record.trim().split(" ")[1]));
      return acc;
   }, {});
}
function mean(town, data) {
   let cityData = parseData(data);
   if (!(town in cityData)) return -1.0;
   let rainfall = cityData[town];
   return rainfall.reduce((sum, value) => sum + value, 0) / rainfall.length;
}
function variance(town, data) {
   let cityData = parseData(data);
   if (!(town in cityData)) return -1.0;
   let rainfall = cityData[town];
   let meanValue = mean(town, data);
   return (
      rainfall.reduce((sum, value) => sum + Math.pow(value - meanValue, 2), 0) / rainfall.length
   );
}


function parse(t, s) {
   var d = s
      .split("\n")
      .map((x) => x.split(":"))
      .filter((x) => x[0] == t);
   return d.length ? d[0][1].split(",").map((x) => +x.split(" ")[1]) : undefined;
}
function mean(t, s) {
   var d = parse(t, s);
   return d ? d.reduce((p, c) => p + c, 0) / d.length : -1;
}
function variance(t, s) {
   var d = parse(t, s);
   var m = d ? d.reduce((p, c) => p + c, 0) / d.length : -1;
   return m > -1 ? d.map((x) => (x - m) ** 2).reduce((p, c) => p + c, 0) / d.length : m;
}