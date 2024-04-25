/*
|--------------------------------------------------------------------------
| Meeting
|--------------------------------------------------------------------------
|
*/

function meeting(s) {
   let res = [];
   let names = s.toUpperCase().split(";");
   for (let i = 0; i < names.length; i++) {
      let x = names[i].split(":");
      res.push(`(${x[1]}, ${x[0]})`);
   }
   return res.sort().join("");
}


function meeting(s) {
   return s
      .toUpperCase()
      .replace(/(\w+):(\w+)/g, "($2, $1)")
      .split(";")
      .sort()
      .join("");
}


function meeting(s) {
   return s
      .split(";")
      .map((i) => i.toUpperCase().split(":").reverse().join(", "))
      .sort()
      .map((i) => "(" + i + ")")
      .join("");
}


console.log(
   meeting(
      "Alexis:Wahl;John:Bell;Victoria:Schwarz;Abba:Dorny;Grace:Meta;Ann:Arno;Madison:STAN;Alex:Cornwell;Lewis:Kern;Megan:Stan;Alex:Korn"
   ),
   "(ARNO, ANN)(BELL, JOHN)(CORNWELL, ALEX)(DORNY, ABBA)(KERN, LEWIS)(KORN, ALEX)(META, GRACE)(SCHWARZ, VICTORIA)(STAN, MADISON)(STAN, MEGAN)(WAHL, ALEXIS)"
);