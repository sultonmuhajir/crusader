/*
|--------------------------------------------------------------------------
| Help the bookseller !
|--------------------------------------------------------------------------
|
*/

function stockList(listOfArt, listOfCat) {
   if (listOfArt.length === 0 || listOfCat.length === 0) return "";
   const catQuan = {};
   listOfCat.forEach((cat) => (catQuan[cat] = 0));
   listOfArt.forEach((art) => {
      const [code, quan] = art.split(" ");
      const cat = code[0];
      catQuan[cat] += parseInt(quan) || 0;
   });
   return listOfCat.map((cat) => `(${cat} : ${catQuan[cat] || 0})`).join(" - ");
}


function stockList(listOfArt, listOfCat) {
   return listOfArt.length
      ? listOfCat
           .map(
              (val) =>
                 `(${val} : ${listOfArt.reduce(
                    (pre, v) => pre + (v[0] === val) * v.split(` `)[1],
                    0
                 )})`
           )
           .join(` - `)
      : ``;
}


function stockList(listOfArt, listOfCat) {
   return !listOfArt.length || !listOfCat.length
      ? ""
      : listOfCat
           .map((cat) => {
              let needs = listOfArt.filter((el) => el.charAt(0) === cat);
              let count = needs.reduce((a, b) => {
                 return Number(a) + Number(b.split(" ")[1]);
              }, 0);

              return "(" + cat + " : " + count + ")";
           })
           .join(" - ");
}


console.log(
   stockList(["BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B", "C", "D"]),
   "(A : 0) - (B : 1290) - (C : 515) - (D : 600)"
);
console.log(
   stockList(["ABAR 200", "CDXE 500", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B"]),
   "(A : 200) - (B : 1140)"
);