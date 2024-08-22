/*
|--------------------------------------------------------------------------
| Prize Draw
|--------------------------------------------------------------------------
|
*/

function rank(st, we, n) {
   if (!st) return "No participants";
   let names = st.split(",");
   if (n > names.length) return "Not enough participants";
   let participants = names.map((name, i) => {
      let som =
         name.length +
         [...name.toUpperCase()].reduce((acc, char) => acc + char.charCodeAt(0) - 64, 0);
      return { name: name, winningNumber: som * we[i] };
   });
   participants.sort((a, b) =>
      b.winningNumber === a.winningNumber
         ? a.name.localeCompare(b.name)
         : b.winningNumber - a.winningNumber
   );
   return participants[n - 1].name;
}


const rank = (st, we, n) =>
   ((arr) => (!st ? `No participants` : n > arr.length ? `Not enough participants` : arr[--n][0]))(
      st
         .split(`,`)
         .map((val, idx) => [
            val,
            [...val.toLowerCase()].reduce((pre, v) => pre + v.charCodeAt() - 96, val.length) *
               we[idx],
         ])
         .sort((a, b) => b[1] - a[1] || a[0].localeCompare(b[0]))
   );


function rank(names, weights, rank) {
   if (!names.length) return "No participants";
   let a = names
      .split(",")
      .map((name, i) => [
         name,
         weights[i] *
            [...name.toUpperCase()].reduce((t, c) => t + c.charCodeAt() - 64, name.length),
      ])
      .sort((p1, p2) => p2[1] - p1[1] || p1[0] > p2[0]);
   return rank > a.length ? "Not enough participants" : a[rank - 1][0];
}


console.log(
   rank("Addison,Jayden,Sofia,Michael,Andrew,Lily,Benjamin", [4, 2, 1, 4, 3, 1, 2], 4),
   "Benjamin"
);
console.log(rank("Lagon,Lily", [1, 5], 2), "Lagon");
console.log(
   rank("Addison,Jayden,Sofia,Michael,Andrew,Lily,Benjamin", [4, 2, 1, 4, 3, 1, 2], 8),
   "Not enough participants"
);
console.log(rank("", [4, 2, 1, 4, 3, 1, 2], 6), "No participants");