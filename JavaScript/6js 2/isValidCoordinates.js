/*
|--------------------------------------------------------------------------
| Coordinates Validator
|--------------------------------------------------------------------------
|
*/

function isValidCoordinates(coordinate) {
   const coordinatePattern = /^-?\d{1,2}(\.\d+)?,\s?-?\d{1,3}(\.\d+)?$/;
   if (!coordinatePattern.test(coordinate)) return false;
   const [latitude, longitude] = coordinate.split(",").map(Number);
   if (latitude < -90 || latitude > 90) return false;
   if (longitude < -180 || longitude > 180) return false;
   return true;
}


function isValidCoordinates(coordinates) {
   return /^\-?([0-8]\d|90|\d)(\.\d*)?, ?\-?(1[0-7]\d|\d\d?|180)(\.\d*)?$/.test(coordinates);
}


function isValidCoordinates(coordinates) {
   let match = coordinates.match(/^[-]?(\d+(?:\.\d+)?), [-]?(\d+(?:\.\d+)?)$/);
   if (!match) return false;
   let lat = Math.abs(parseFloat(match[1]));
   let lng = Math.abs(parseFloat(match[2]));
   return lat >= 0 && lat <= 90 && lng >= 0 && lng <= 180;
}


console.log(isValidCoordinates("-23, 25"), true);
console.log(isValidCoordinates("24.53525235, 23.45235"), true);
console.log(isValidCoordinates("04, -23.234235"), true);
console.log(isValidCoordinates("43.91343345, 143"), true);
console.log(isValidCoordinates("4, -3"), true);
console.log(isValidCoordinates("23.234, - 23.4234"), false);
console.log(isValidCoordinates("2342.43536, 34.324236"), false);
console.log(isValidCoordinates("N23.43345, E32.6457"), false);
console.log(isValidCoordinates("99.234, 12.324"), false);
console.log(isValidCoordinates("6.325624, 43.34345.345"), false);
console.log(isValidCoordinates("0, 1,2"), false);
console.log(isValidCoordinates("0.342q0832, 1.2324"), false);