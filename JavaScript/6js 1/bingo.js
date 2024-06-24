/*
|--------------------------------------------------------------------------
| Lottery Ticket
|--------------------------------------------------------------------------
|
*/

function bingo(ticket, win) {
   let res = ticket.reduce(
      (count, [string, num]) =>
         count + (string.split("").some((char) => char.charCodeAt(0) === num) ? 1 : 0),
      0
   );
   return res >= win ? "Winner!" : "Loser!";
}


function bingo(ticket, win) {
   let count = 0;
   ticket.forEach((game) => {
      if (game[0].includes(String.fromCharCode(game[1]))) count++;
   });
   return count >= win ? "Winner!" : "Loser!";
}


function bingo(ticket, win) {
   if (ticket.filter((a) => a[0].split("").some((b) => b.charCodeAt(0) == a[1])).length >= win) {
      return "Winner!";
   }
   return "Loser!";
}


console.log(
   bingo(
      [
         ["ABC", 65],
         ["HGR", 74],
         ["BYHT", 74],
      ],
      2
   ),
   "Loser!"
);